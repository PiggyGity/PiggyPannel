<?php

namespace App\Controllers;

use App\Models\User;

class LoginSocialController extends BaseController
{
    protected $tokenURL;

    protected $apiURLBase;

    public function __construct($router)
    {
        parent::__construct($router);
        if (isset($_SESSION['uid'])) {
            $this->router->redirect('web.lobby');
        }

        define('OAUTH2_CLIENT_ID', '879050015325192192');
        define('OAUTH2_CLIENT_SECRET', '09JJECOglw228Z-WKvDdG4UDUm59iN4t');

        $this->tokenURL = 'https://discord.com/api/oauth2/token';
        $this->apiURLBase = 'https://discord.com/api/users/@me';
    }

    public function set_session_token()
    {
        $token = $this->discord_request($this->tokenURL, array(
            "grant_type" => "authorization_code",
            'client_id' => OAUTH2_CLIENT_ID,
            'client_secret' => OAUTH2_CLIENT_SECRET,
            'redirect_uri' => base_url('auth/discord'),
            'code' => $_GET['code']
        ));

        $_SESSION['access_token'] = $token->access_token;
        return;
    }

    public function destroy_session($token)
    {
        $params = array(
            'access_token' => $token
        );

        // Redirect the user to Discord's revoke page
        header('Location: https://discord.com/api/oauth2/token/revoke' . '?' . http_build_query($params));
        die();
    }

    public function discord()
    {
        if (isset($_GET['code'])) {
            $this->set_session_token();
            header('Location: ' . base_url('auth/discord'));
        }

        if (!isset($_SESSION['access_token']) || empty($_SESSION['access_token'])) {
            $params = array(
                'client_id' => OAUTH2_CLIENT_ID,
                'redirect_uri' => base_url('auth/discord'),
                'response_type' => 'code',
                'scope' => 'identify guilds email'
            );

            header('Location: https://discord.com/api/oauth2/authorize' . '?' . http_build_query($params));
            return;
        }

        if (isset($_SESSION['access_token'])) {
            $discord_data = $this->discord_request($this->apiURLBase);
            $mail = $discord_data->email;
            $user = new User;

            //Verifica se tem o email e o codigo do disc 
            //significa qua esse email foi registrado usando o discord e nao o metodo normal
            if ($udata = $user->find("email = :e AND discord_id = :did", "e=$discord_data->email&did=$discord_data->id")->fetch()) {
                $_SESSION['uid'] = $udata->id;
                $this->router->redirect('web.lobby');
                return;
            }

            if ($udataNew = $user->find("email = :e", "e=$discord_data->email")->fetch()) {
                //dd($user->GetUserDetail($udataNew->id));
                if ($user->GetUserDetail($udataNew->id)) {
                    $_SESSION['uid'] = $udataNew->id;
                    $this->router->redirect('web.lobby');
                    return;
                }
                $mail = "discord." . $discord_data->email;
            }

            $passnew = rand(1111111111111, 9999999999999);
            echo $this->view->render('create_person', [
                "udiscdata" => (object)[
                    "did" => $discord_data->id,
                    "first_name" => $discord_data->username,
                    "last_name" => "#$discord_data->discriminator",
                    "email" => $mail,
                    "avatar" => "https://cdn.discordapp.com/avatars/$discord_data->id/$discord_data->avatar.png",
                    "passwd" => $passnew,
                    "repasswd" => $passnew,
                ]
            ]);
            return;

            /*
            $u_hash = "user" . rand(1, 8888);
            $p_hash = md5(uniqid(rand(1, 9999), true));

            $user->first_name = $discord_data->username;
            $user->last_name = "#$discord_data->discriminator";
            $user->email = $mail;
            $user->passwd = password_hash($p_hash, PASSWORD_DEFAULT);
            $user->u_hash = $u_hash;
            $user->p_hash = $p_hash;
            $user->photo = 'default.jpg';
            $user->discord_id = $discord_data->id;

            if (!$user->save()) {
                return false;
            }

            if (!$user->create_person((object)[
                'uname' => $u_hash,
                'passwd' => strtoupper(md5($p_hash)),
                'nick' => "discord_user".rand(1111,9999),
                'mail' => $mail,
                'sex' => $data->needsex,
            ])) {
                return false;
            }
        */
        } else {
            header('Location: ' . base_url('auth/discord?action=login'));
        }
    }

    public function discord_request($url, mixed $post = false, $headers = array())
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);

        $response = curl_exec($ch);

        if ($post)
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post));

        $headers[] = 'Accept: application/json';

        if ($_SESSION['access_token'])
            $headers[] = 'Authorization: Bearer ' . $_SESSION['access_token'];

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $response = curl_exec($ch);
        return json_decode($response);
    }
}
