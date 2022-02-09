<?php

namespace App\Controllers;

use App\Models\Support;
use App\Models\User;
use Crypt_RSA;

class RequestController extends BaseController
{
    function getChatData(?array $request)
    {
        $request = filter_var_array($request, FILTER_SANITIZE_STRIPPED);
        $request = (object) $request;

        if (!isset($request->uid) || empty($request->uid)) {
            return 'invalid paramters';
        }

        if ($request->uid != $_SESSION['uid']) {
            return 'invalid assignature key';
        }

 
        $s = (new Support())->find("sendID = :sid OR receiveID = :rid", "sid=" . $_SESSION['uid'] . "&rid=" . $_SESSION['uid'] . "")->order("id DESC")->fetch(true);

        $data = [];

        foreach ($s as $row) {
            $data[] = [
                "id" => $row->id,
                "send" => $row->sendID,
                "receive" => $row->receiveID,
                "content" => $row->content,
                "created_at" => $row->created_at,
                "updated_at" => $row->updated_at,
            ];
        }

        echo json_encode($data);
        return;
    }

    public function signin_client(): void
    {
        if (empty($this->request->mail) || empty($this->request->passwd)) {
            echo $this->response("response", [
                "state" => false,
                "message" => "Preencha todos os campos",
            ]);
            return;
        }

        if (!filter_var($this->request->mail, FILTER_VALIDATE_EMAIL)) {
            echo $this->response('response', [
                'state' => false,
                'message' => "O email digitado não é válido.",
            ]);
            return;
        }

        $user = new User;

        if (!$udata = $user->find("email = :umail", "umail={$this->request->mail}")->fetch()) {
            echo $this->response('response', [
                'state' => false,
                'message' => 'Email ou senha está incorreto.',
            ]);
            return;
        }

        if (!password_verify($this->request->passwd, $udata->passwd)) {
            echo $this->response("response", [
                "state" => false,
                "message" => 'Email ou senha está incorreto.',
            ]);
            return;
        }

        if (!$user->GetUserDetail($udata->id)) {
            echo $this->response('response', [
                'state' => false,
                'message' => 'O personagem dessa conta não existe mais, crie outra conta.',
            ]);
            return;
        }

        echo $this->response("response", [
            "state" => true,
            "message" => "Login efetuado com sucesso, aguarde.",
            "uid" => $udata->id,
        ]);
        return;
    }

    public function udetail()
    {
        $user = new User;

        if (!$udata = $user->findById($this->request->uid)) {
            echo $this->response('response', [
                'state' => false,
                'message' => 'A conta que você esá buscando foi deletada ou nao existe.',
            ]);
            return;
        }

        if (!$ug = $user->GetUserDetail($udata->id)) {
            echo $this->response('response', [
                "uname" => null,
                "passwd" => null,
                "first_name" => "Desconhecido",
                "last_name" => "Desconhecido",
                "profile_src" => getImage('profile', "default.jpg")
            ]);
            return;
        }

        include_once  dirname(__DIR__, 2) . "/resources/libraries/Crypt/RSA.php";
        $rsa = new Crypt_RSA(); 
        $rsa->loadKey('<RSAKeyValue><Modulus>qiydW7oa9F2nUwKbJyuuEj3vmnbMuzhDqor4Zc8GE0h48V+GyaiW+hjQRzG95TXcvpN6LIp7kIM/mDbTHyjYUWzBD1Ovy51D+N2B0lBlYyAItX51bcf8cmggrIGKVvBgwqD4APMHkiZoYcTizYJepBPVSzjGnKJXCr0LLdojWGk=</Modulus><Exponent>AQAB</Exponent></RSAKeyValue>');
        $rsa->setEncryptionMode(CRYPT_RSA_ENCRYPTION_PKCS1);
        
        $k = urlencode(base64_encode($rsa->encrypt($udata->p_hash . ';' . (time() + 8000))));
      
        echo $this->response("response", [
            "uname" => $ug->UserName,
            "hash_key" => $k,
            "first_name" => $udata->first_name,
            "last_name" => $udata->last_name,
            "profile_src" => getImage('profile', $udata->photo)
        ]);
    }

    public function sendChatUser(?array $request)
    {
        $request = filter_var_array($request, FILTER_SANITIZE_STRIPPED);

        $request = (object) $request;

        if (!isset($_SESSION['uid']) || empty($_SESSION['uid'])) {
            return 'invalid assignature key';
        }

        $s = new Support;

        $s->sendID = $_SESSION['uid'];
        $s->receiveID = 0;
        $s->content = $request->content;

        $s->save();

        echo $this->response('response', [
            'state' => true,
            'msg' => 'menssagem enviada com sucesso',
            'content' => $request->content,
            'time' => date('Y-m-d H:i:s')
        ]);
        return;
    }

    public function signin(?array $request)
    {
        $request = filter_var_array($request, FILTER_SANITIZE_STRIPPED);

        if (in_array("", $request)) {
            echo $this->response('response', [
                'state' => false,
                'msg' => 'Você precisa preencher todos os campos.',
            ]);
            return;
        }

        $request = (object) $request;

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            echo $this->response('response', [
                'state' => false,
                'msg' => "O email digitado não é válido.",
            ]);
            return;
        }

        $user = new User;

        if (!$udata = $user->find("email = :umail", "umail=$request->email")->fetch()) {
            echo $this->response('response', [
                'state' => false,
                'msg' => 'Email ou senha está incorreto.',
            ]);
            return;
        }

        if (!password_verify($request->passwd, $udata->passwd)) {
            echo $this->response('response', [
                'state' => false,
                'msg' => 'Email ou senha está incorreto.',
            ]);
            return;
        }

        if (!$ug = $user->GetUserDetail($udata->id)) {
            echo $this->response('response', [
                'state' => false,
                'msg' => 'O personagem dessa conta não existe mais, crie outra conta.',
            ]);
            return;
        }

        $_SESSION['uid'] = $udata->id;

        echo $this->response('response', [
            'state' => true,
            'msg' => 'Login efetuado com sucesso, aguarde estamos te redirecionando.',
            'url' => $this->router->route('web.lobby')
        ]);
        return;
    }

    public function signup(?array $request): void
    {
        $request = filter_var_array($request, FILTER_SANITIZE_STRIPPED);

        if (in_array("", $request)) {
            echo $this->response('response', [
                'state' => false,
                'msg' => 'Você precisa preencher todos os campos.',
            ]);
            return;
        }

        $request = (object) $request;

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            echo $this->response('response', [
                'state' => false,
                'msg' => "O email digitado não é válido.",
            ]);
            return;
        }

        $user = new User;

        if (!$user->check('mail', $request->email)) {
            echo $this->response('response', [
                'state' => false,
                'msg' => 'Esse email ja esta sendo usado.',
            ]);
            return;
        }

        if (!$user->check('nick', $request->nickname)) {
            echo $this->response('response', [
                'state' => false,
                'msg' => 'Esse nickname ja esta sendo usado.',
            ]);
            return;
        }



        if (strlen($request->nickname) < 4 || strlen($request->nickname) > 16) {
            echo $this->response('response', [
                'state' => false,
                'msg' => 'O nick do personagem deve conter de 4 á 16 caracteres.',
            ]);
            return;
        }

        if (strlen($request->passwd) < 8 || strlen($request->passwd) > 16) {
            echo $this->response('response', [
                'state' => false,
                'msg' => 'A senha deve conter de 8 á 16 caracteres.',
            ]);
            return;
        }

        if ($request->passwd !== $request->repasswd) {
            echo $this->response('response', [
                'state' => false,
                'msg' => 'As senhas digitadas não são iguais.',
            ]);
            return;
        }

        if (!$user->register($request)) {
            echo $this->response('response', [
                'state' => false,
                'msg' => "Ocorreu um erro interno se o problema persistir entre em contato com o administrador.",
            ]);
            return;
        }

        if ($uinfo = (new User)->find("email = :e", "e={$request->email}")->fetch()) {
            $_SESSION['uid'] = $uinfo->id;

            echo $this->response('response', [
                'state' => true,
                'msg' => 'Registrado com sucesso, aguarde que voce será redirecionado.',
                'url' => $this->router->route('web.lobby')
            ]);
            return;
        }
    }

    public function playgame(?array $request)
    {
        $request = (object) $request;
        if (isset($request->key)) {
            $k = $request->key;

            $udata = (new User)->findById($_SESSION['uid']);

            echo '
            <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" class= id="7road-ddt-game"
                codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0"
                name="Main" id="Main">
                <param name="allowScriptAccess" value="always" />
                <param name="movie" value="https://cdn.ddtankalpha.com.br/flash/Loading.swf?user=' . $udata->u_hash . '&key=' . $k . '&config=' . base_url('/') . 'config.xml" />
                <param name="quality" value="high" />
                <param name="menu" value="false">
                <param name="bgcolor" value="#000000" />
                <param name="FlashVars" value="editby=" />
                <param name="allowScriptAccess" value="always" />
                <embed flashvars="editby=" src="https://cdn.ddtankalpha.com.br/flash/Loading.swf?user=' . $udata->u_hash . '&key=' . $k . '&config=' . base_url('/') . 'config.xml"
                    width="1000" height="600" align="middle" quality="high" name="Main" allowscriptaccess="always"
                    type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" wmode="direct"/>
            </object>';
            return;
        }
    }


    public function simple_signin(?array $request)
    {
        $request = filter_var_array($request, FILTER_SANITIZE_STRIPPED);

        if (in_array("", $request)) {
            $_SESSION['flash'] = "Você precisa preencher todos os campos.";
            header('Location :' .  $this->router->route('web.simple_auth'));
            return;
        }

        $request = (object) $request;

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {

            $_SESSION['flash'] = "O email digitado não é válido.";
            header('Location :' .  $this->router->route('web.simple_auth'));
            return;
        }

        $user = new User;

        if (!$udata = $user->find("email = :umail", "umail=$request->email")->fetch()) {
            $_SESSION['flash'] = "Email ou senha está incorreto.";
            header('Location :' .  $this->router->route('web.simple_auth'));
            return;
        }

        if (!password_verify($request->passwd, $udata->passwd)) {
            $_SESSION['flash'] = "Email ou senha está incorreto.";
            header('Location :' .  $this->router->route('web.simple_auth'));
            return;
        }

        if (!$user->GetUserDetail($udata->id)) {
            $_SESSION['flash'] = "O personagem dessa conta não existe mais, crie outra conta.";
            header('Location :' .  $this->router->route('web.simple_auth'));
            return;
        }

        $_SESSION['uid'] = $udata->id;

        $this->router->redirect('web.lobby');
        return;
    }

    public function simple_signup(?array $request): void
    {
        $request = filter_var_array($request, FILTER_SANITIZE_STRIPPED);

        if (in_array("", $request)) {
            $_SESSION['flash'] = "Você precisa preencher todos os campos.";
            header('Location :' .  $this->router->route('web.simple_auth'));
            return;
        }

        $request = (object) $request;

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['flash'] = "O email digitado não é válido.";
            header('Location :' .  $this->router->route('web.simple_auth'));
            return;
        }

        $user = new User;

        if (!$user->check('mail', $request->email)) {
            $_SESSION['flash'] = "Esse email ja esta sendo usado.";
            header('Location :' .  $this->router->route('web.simple_auth'));
            return;
        }

        if (!$user->check('nick', $request->nickname)) {
            $_SESSION['flash'] = "Esse nickname ja esta sendo usado.";
            header('Location :' .  $this->router->route('web.simple_auth'));
            return;
        }

        if (strlen($request->nickname) < 4 || strlen($request->nickname) > 16) {
            $_SESSION['flash'] = "O nick do personagem deve conter de 4 á 16 caracteres.";
            header('Location :' .  $this->router->route('web.simple_auth'));
            return;
        }

        if (strlen($request->passwd) < 8 || strlen($request->passwd) > 16) {
            $_SESSION['flash'] = "A senha deve conter de 8 á 16 caracteres.";
            header('Location :' .  $this->router->route('web.simple_auth'));
            return;
        }

        if ($request->passwd !== $request->repasswd) {
            $_SESSION['flash'] = 'As senhas digitadas não são iguais.';
            header('Location :' .  $this->router->route('web.simple_auth'));
            return;
        }

        if (!$user->register($request)) {
            $_SESSION['flash'] = 'Ocorreu um erro interno se o problema persistir entre em contato com o administrador."';
            header('Location :' .  $this->router->route('web.simple_auth'));
            return;
        }

        if ($uinfo = (new User)->find("email = :e", "e={$request->email}")->fetch()) {
            $_SESSION['uid'] = $uinfo->id;
            $this->router->redirect('web.lobby');
            return;
        }
    }
}
