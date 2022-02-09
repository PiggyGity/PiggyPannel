<?php

namespace App\Controllers;

use App\Models\DbTankSchema;
use App\Models\Invoice;
use App\Models\Itens;
use App\Models\Product;
use App\Models\User;
use App\Models\Visit;
use Crypt_RSA;

class PagesController extends BaseController
{
    public function __construct($router)
    {
        parent::__construct($router);
        if (!isset($_SESSION['uid'])) {
            $this->router->redirect('web.landing');
            return true;
        }
        
        checkPayments($_SESSION['uid']);
    }

    public function purchases_history()
    {
        echo $this->view->render('account/purchases_history', [
            "invoice_list" => (new Invoice)->find("uid = :id", "id={$_SESSION['uid']}")->fetch(true)
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

        $visit = (new Visit)->find()->fetch(true);
        $visits = 0;

        foreach ($visit as $row) {
            $visits += $row->data->count;
        }

        $visits = $visits;

        $user = new User();
        $count_users = count($user->find()->fetch(true));
        $months = [];
        $users = [];
        $currentMonth = date('m');

        $mesprapular = $currentMonth - 06;

        if ($currentMonth < 0) $mesprapular = 0;

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
            "visit_count" => $visits,
            "uequip" => $eqp,
            "js_months" => json_encode($months),
            "js_count" => json_encode($users),
            "ranking" => (new User)->getRankingList()
        ]);
        return;
    }

    public function playgame(): void
    {
        if (!isset($_SESSION['uid']) || empty($_SESSION['uid'])) {
            $this->router->redirect('web.landing');
        }

        if (!$udata = (new User)->findById($_SESSION['uid'])) {
            die('usuario nao encontrado');
        }

        $user = $udata->u_hash;
        $key = md5($udata->p_hash);

        $ch = curl_init(config('app.Request') . 'CreateLoginMec.aspx?content=' . urlencode($user . '|' . $key));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $resposta = curl_exec($ch);
        curl_close($ch);

        //  || strlen($resposta) <  36 || strlen($resposta) > 36
        if ($resposta == "0" || $resposta == '-1900') {
            $this->router->redirect('web.landing');
            return;
        }

        $key = $resposta;
        
        
        echo $this->view->render('playgame', [
            "uname" => $user,
            "hash" => $key,
        ]);

        return;
    }

    public function account_settings()
    {
        echo $this->view->render('account/settings');
    }

    public function recharge()
    {
        echo $this->view->render('recharge', [
            "products" => (new Product)->find()->fetch(true)
        ]);
    }

    public function teste()
    {
        $product = new Product;
        $product->SendRewardRecharge($_SESSION['uid'], 7);
    }

    public function teste_do()
    {
        if (is_array($_FILES)) {
            if (is_uploaded_file($_FILES['userImage']['tmp_name'])) {
                $sourcePath = $_FILES['userImage']['tmp_name'];
                $targetPath = dirname(__DIR__, 2) . "/storage/uploads/profile/" . $_FILES['userImage']['name'];
                if (move_uploaded_file($sourcePath, $targetPath)) {
                    echo "<img class=\"image-preview\" src=\"$targetPath\" class=\"upload-preview\" />";
                }
            }
        }
    }

    public function config()
    {
        echo $this->view->render('config');
    }

    public function TesteDelete()
    {
        $schema = new DbTankSchema();

        foreach($schema->find()->fetch(true) as $db)
        {
            echo "Truncate Table $db->TABLE_NAME". PHP_EOL;
        }

        return;
    }
}
