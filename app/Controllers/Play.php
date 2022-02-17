<?php

namespace App\Controllers;

use App\Models\User;

class Play extends BaseController
{
    /**
     * Get hash user by request
     *
     * @param string $user
     * @param string $key
     * @return string|null
     */
    protected function getHashUser(string $user, string $key): ?string
    {
        $content = urlencode($user . '|' . $key);
        $ch = curl_init(config('app.Request') . "CreateLoginMec.aspx?content={$content}");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);

        if ($result == "0" || $result == '-1900') {
            $this->router->redirect('web.landing');
            return null;
        }

        return $result;
    }

    /**
     * Return play page view
     *
     * @return null
     */
    public function getPlay(): void
    {
        if (!isset($_SESSION['uid']) || empty($_SESSION['uid'])) {
            $this->router->redirect('web.landing');
        }
        
        if ($_ENV['maintenance'] == 'true') {
            $this->router->redirect('web.maintenance');
            return;
        }

        $user = $this->udata->u_hash;
        $key = md5($this->udata->p_hash);

        $hash =  $this->getHashUser($user, $key);

        echo $this->view->render('playgame', [
            "uname" => $user,
            "hash" => $hash,
        ]);

        return;
    }
}
