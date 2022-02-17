<?php

namespace App\Controllers;

use App\Models\Invoice;
use App\Models\Product;
use App\Models\User;

class PagesController extends BaseController
{
    public function __construct($router)
    {
        parent::__construct($router);
        if (!isset($_SESSION['uid'])) {
            $this->router->redirect('web.landing');
            return true;
        }
    }
    
    public function purchases_history()
    {
        $date = date('Y-m-d H:i:s',(strtotime ( '-3 day' , strtotime (date('Y-m-d H:i:s')))));
        echo $this->view->render('account/purchases_history', [
            "invoice_list" => (new Invoice())->find("uid = :id AND (state = :state OR created_at >= :date)", "id={$_SESSION['uid']}&state=approved&date={$date}")->order('state ASC')->fetch(true)
        ]);
        return;
    }

    public function recover(): void
    {
        if (!isset($_SESSION['uid']) || empty($_SESSION['uid'])) {
            $this->router->redirect('web.landing');
        }
        echo $this->view->render('auth/recover');
        return;
    }

    public function lobby(): void
    {
        if (!isset($_SESSION['uid']) || empty($_SESSION['uid'])) {
            $this->router->redirect('web.landing');
        }

        //equipamento atual do usuario
        $cequip = explode(',', $this->udetail->Style);

        $eqp = (object) [
            "head" => (explode("|", $cequip[0]))[0],
            "hair" => (explode("|", $cequip[2]))[0],
            "eff" => (explode("|", $cequip[3]))[0],
            "cloth" => (explode("|", $cequip[4]))[0],
            "face" => (explode("|", $cequip[5]))[0],
            "gun" => (explode("|", $cequip[6]))[0],
            "suit" => (explode("|", $cequip[7]))[0],
        ];

        $visits = 1;

        //get total visits
        $visitPath = __DIR__ . '/../../storage/cache/total-visits.cache';
        if (file_exists($visitPath)) {
            $visits = file_get_contents($visitPath);
        }

        $user = new User();
        $count_users = count($user->find()->fetch(true));
        $months = [];
        $users = [];
        $currentMonth = date('m');

        $mesprapular = $currentMonth - 06;

        if ($currentMonth < 0) {
            $mesprapular = 0;
        }

        for ($i = 1; $i < 13; $i++) {
            if ($i <= $mesprapular) {
                continue;
            }
            if ($i > $currentMonth) {
                break;
            }

            $month = date('m', mktime(0, 0, 0, $i, 1));

            $months[] = dateString($month);

            if ($count = $user->find("created_at >= :start AND created_at <= :end", "start=2021-$month-01 00:00:00&end=2021-$month-31 23:59:00")->fetch(true)) {
                $users[] = count($count);
            } else {
                $users[] = 0;
            }
        }

        echo $this->view->render('lobby', [
            "users_count" => $count_users,
            "visit_count" => !empty($visits) ? $visits : 1,
            "uequip" => $eqp,
            "js_months" => json_encode($months),
            "js_count" => json_encode($users),
            "ranking" => (new User())->getRankingList()
        ]);
        return;
    }

    protected function getHashUser($user, $key)
    {
        $cookie = tempnam("/tmp", "CURLCOOKIE");
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1");
        curl_setopt($ch, CURLOPT_URL, config('app.Request') . 'CreateLoginMec.aspx?content=' . urlencode($user . '|' . $key));
        curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_ENCODING, "");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_AUTOREFERER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);    # required for https urls
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
        $content = curl_exec($ch);
        $response = curl_getinfo($ch);
        curl_close($ch);

        if ($response['http_code'] != 200) {
            return null;
        }

        if ($content == "0" || $content == '-1900') {
            $this->router->redirect('web.landing');
            return;
        }

        return $content;
    }

    public function playgame(): void
    {
        if (!isset($_SESSION['uid']) || empty($_SESSION['uid'])) {
            $this->router->redirect('web.landing');
        }

        if (config('app.Maintenance')) {
            $this->router->redirect('web.maintenance');
            return;
        }

        if (!$udata = (new User())->findById($_SESSION['uid'])) {
            die('usuario nao encontrado');
        }

        $user = $udata->u_hash;
        $key = md5($udata->p_hash);

        $hash =  $this->getHashUser($user, $key);

        if($hash == null)
         $this->router->redirect('web.maintenance');;

        echo $this->view->render('playgame', [
            "uname" => $user,
            "hash" => $hash,
        ]);

        return;
    }

    public function maintenance(): void
    {
        echo $this->view->render('maintenance');
        return;
    }

    public function account_settings()
    {
        echo $this->view->render('account/settings');
    }

    public function recharge()
    {
        echo $this->view->render('recharge', [
            "products" => (new Product())->find()->fetch(true)
        ]);
    }
}
