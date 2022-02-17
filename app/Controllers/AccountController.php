<?php

namespace App\Controllers;

use App\Models\User;

class AccountController extends BaseController
{
    public function __construct($router)
    {
        parent::__construct($router);
        if (!isset($_SESSION['uid'])) {
            die('Você precisa estar logado para continuar.');
        }
    }

    // currentpassword  newpassword confirmnewpassword
    public function change_pass(): void
    {
        if (in_array("", (array) $this->request)) {
            echo $this->response("response", [
                'state' => false,
                'msg' => 'Preencha todos os campos.'
            ]);
            return;
        }
        //batataassada12

        $user = (new User())->findById($_SESSION['uid']);

        if (!password_verify($this->request->currentpassword, $user->passwd)) {
            echo $this->response("response", [
                'state' => false,
                'msg' => 'A senha atual informada é inválida.'
            ]);
            return;
        }

        if ($this->request->newpassword != $this->request->confirmnewpassword) {
            echo $this->response("response", [
                'state' => false,
                'msg' => 'A nova senha informada não coincide.'
            ]);
            return;
        }

        if (strlen($this->request->newpassword) < 8 || strlen($this->request->newpassword) > 16) {
            echo $this->response("response", [
                'state' => false,
                'msg' => 'A senha deve conter entre 8 a 16 caracteres.'
            ]);
            return;
        }

        $user->passwd = password_hash($this->request->newpassword, PASSWORD_DEFAULT);
        if (!$user->save()) {
            echo $this->response("response", [
                'state' => false,
                'msg' => 'Ocorreu um erro interno ao salvar alterações, tente novamente mais tarde.'
            ]);
            return;
        }

        unset($_SESSION['uid']);

        echo $this->response("response", [
            'state' => true,
            'msg' => 'Senha alterada com sucesso. Por segurança sua sessão foi encerrada, realize o login novamente.',
            'url' => $this->router->route('web.landing')
        ]);
        return;
    }

    public function change_mail(): void
    {
        if (in_array("", (array) $this->request) || empty($this->request->emailaddress) || empty($this->request->confirmemailpassword) || strlen($this->request->emailaddress) < 1 || strlen($this->request->confirmemailpassword) < 1) {
            echo $this->response("response", [
                'state' => false,
                'msg' => 'Preencha todos os campos.'
            ]);
            return;
        }
        //batataassada12
        if ((new User())->find("email = :e", "e={$this->request->emailaddress}")->fetch()) {
            echo $this->response("response", [
                'state' => false,
                'msg' => 'Este email ja está em uso.'
            ]);
            return;
        }

        $user = (new User())->findById($_SESSION['uid']);

        if (!password_verify($this->request->confirmemailpassword, $user->passwd)) {
            echo $this->response("response", [
                'state' => false,
                'msg' => 'A senha informada é inválida.'
            ]);
            return;
        }

        $user->email = $this->request->emailaddress;
        if (!$user->save()) {
            echo $this->response("response", [
                'state' => false,
                'msg' => 'Ocorreu um erro interno ao salvar alterações, tente novamente mais tarde.'
            ]);
            return;
        }

        unset($_SESSION['uid']);

        echo $this->response("response", [
            'state' => true,
            'msg' => 'Email alterado com sucesso. Por segurança sua sessão foi encerrada, realize o login novamente.',
            'url' => $this->router->route('web.landing')
        ]);
        return;
    }

    public function change_name(): void
    {
        if (in_array("", (array) $this->request) || empty($this->request->fname) || empty($this->request->lname || strlen($this->request->fname) < 1 || strlen($this->request->lname) < 1)) {
            echo $this->response("response", [
                'state' => false,
                'msg' => 'Preencha todos os campos.'
            ]);
            return;
        }

        $user = (new User())->findById($_SESSION['uid']);
        $user->first_name = $this->request->fname;
        $user->last_name = $this->request->lname;

        if (!$user->save()) {
            echo $this->response("response", [
                'state' => false,
                'msg' => 'Ocorreu um erro interno ao salvar alterações, tente novamente mais tarde.'
            ]);
            return;
        }

        echo $this->response("response", [
            'state' => true,
            'msg' => 'Nome alterado com sucesso, atualize a pagina.'
        ]);
        return;
    }

    public function change_nickname(): void
    {
        if (in_array("", (array) $this->request) || empty($this->request->newnick) || empty($this->request->passwd)) {
            echo $this->response("response", [
                'state' => false,
                'msg' => 'Preencha todos os campos'
            ]);
            return;
        }

        if (strlen($this->request->newnick) < 4 || strlen($this->request->newnick) > 20) {
            echo $this->response("response", [
                'state' => false,
                'msg' => 'O nickname deve ter entre 4 e 16 caracteres'
            ]);
            return;
        }

        $user = new User();

        if (!$user->check('nick', $this->request->newnick)) {
            echo $this->response("response", [
                'state' => false,
                'msg' => 'Esse nickname ja está sendo utilizado.'
            ]);
            return;
        }

        if (!password_verify($this->request->passwd, $this->udata->passwd)) {
            echo $this->response("response", [
                'state' => false,
                'msg' => 'A senha informada não é válida.'
            ]);
            return;
        }

        if ($this->udetail->State == 1) {
            echo $this->response("response", [
                'state' => false,
                'msg' => 'Você precisa sair do jogo para trocar o nick do personagem.'
            ]);
            return;
        }

        if (!$user->ChangeNickName($_SESSION['uid'], $this->request->newnick)) {
            echo $this->response("response", [
                'state' => false,
                'msg' => 'Ocorreu um erro interno ao trocar o nickname, se o problema persistir entre em contato com o administrador.'
            ]);
            return;
        }

        echo $this->response("response", [
            'state' => true,
            'msg' => 'Nickname alterado com sucesso.'
        ]);
        return;
    }

    public function change_avatar(?array $request)
    {
        $request = filter_var_array($request, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $request = (object) $request;

        $user = (new User())->findById($_SESSION['uid']);
        if (isset($request->remove_profile) && $request->remove_profile) {
            $user->photo = 'default.jpg';
            $user->save();
            return;
        }

        if (is_array($_FILES)) {
            $type = $_FILES["avatar"]["type"];

            if (!$type == "image/jpeg" || !$type == "image/png" ||  !$type == "image/gif" ||  !$type == "image/jpg") {
                echo $this->response("response", [
                    'state' => false,
                    'msg' => 'Formato inválido'
                ]);
                return;
            }

            if (is_uploaded_file($_FILES['avatar']['tmp_name'])) {
                $sourcePath = $_FILES['avatar']['tmp_name'];
                $path_parts = pathinfo($_FILES['avatar']['name']);
                $targetPath = dirname(__DIR__, 2) . "/storage/uploads/profile/" . $_SESSION['uid'] . "-user." . $path_parts['extension'];

                if (move_uploaded_file($sourcePath, $targetPath)) {
                    $user->photo = $_SESSION['uid'] . "-user." . $path_parts['extension'];
                    $user->save();
                    return;
                }
            }
        }
    }
}
