<?php

namespace App\Controllers;

use App\Models\Itens;
use App\Models\User;
use Libraries\DataLayer\Connect;
use PDO;
use SoapClient;

class AdminController extends BaseController
{
    public function __construct($router)
    {
        parent::__construct($router);
        if (!isset($_SESSION['uid'])) {
            die('Você precisa estar logado para continuar.');
        }

        if ($this->udata->type != 7) {
            die('Você não tem permissao para acessar.');
        }
    }

    public function user_list(): void
    {
        echo $this->view->render('admin/user/list', [
            "user_list" => (new User)->find()->fetch(true)
        ]);
        return;
    }
    public function user_ban_in_game(): void
    {
        if (in_array("", (array) $this->request)) {
            echo $this->response('response', [
                'state' => false,
                'msg' => 'Preencha todos os campos'
            ]);
            return;
        }

        if (!(new User)->ban_in_game($this->request->ban_time, $this->request->reason, $this->request->uid)) {
            echo $this->response('response', [
                'state' => false,
                'msg' => 'Ocorreu um erro interno ao tentar banir o usuario.'
            ]);
            return;
        }

        echo $this->response('response', [
            'state' => true,
            'msg' => 'Usuario banido com sucesso.'
        ]);
        return;
    }

    public function user_unban_in_game(): void
    {
        if (empty($this->request->uid)) {
            echo $this->response('response', [
                'state' => false,
                'msg' => 'Usuario inválido'
            ]);
            return;
        }

        if (!(new User)->unban_in_game($this->request->uid)) {
            echo $this->response('response', [
                'state' => false,
                'msg' => 'Ocorreu um erro interno ao tentar desbanir o usuario.'
            ]);
            return;
        }

        echo $this->response('response', [
            'state' => true,
            'msg' => 'Usuario desbanido com sucesso.'
        ]);
        return;
    }

    //Enviar item
    public function send_item()
    {
        echo $this->view->render('admin/item/send', [
            "users_list" => (new User)->getSysDetail()
        ]);

        return;
    }

    public function item_data($data): void
    {
        $query = $data['TemplateID'];
        //movie_title LIKE CONCAT('%', :title, '%') OR slug LIKE CONCAT('%', :slug, '%')
        if (!$item = (new Itens)->find("TemplateID LIKE CONCAT('%', :id, '%') OR Name LIKE CONCAT('%', :name, '%') ", "id=$query&name=$query")->fetch()) {
            echo json_encode(['message' => "item não encontrado"]);
            return;
        }

        //  SELECT Name  
        //FROM sys.system_views  
        //WHERE Name LIKE 'dm%'; 
        $final = (array) $item->data;
        $final["imagesrc"] = loadImageItem($final["TemplateID"]);
        echo json_encode($final);
        return;
    }
   
    public function sendItemToPlayer($data)
    {
        $request = (object) $data;
        if (!isset($request->TemplateID) || empty($request->TemplateID)) {
            echo $this->response('response', [
                'state' => false,
                'msg' => 'Você não selecionou um item'
            ]);
            return;
        }

        if (!isset($request->UserID) || empty($request->UserID)) {
            echo $this->response('response', [
                'state' => false,
                'msg' => 'Você não selecionou um usuario'
            ]);
            return;
        }

        $IsBind = (isset($request->IsBinds) && !empty($request->IsBinds)) ? 1 : 0;
        $itemName = ((new Itens)->findById($request->TemplateID))->Name;
        $nick = ((new User)->getSysDetailById($request->UserID))->NickName;

        $conn = Connect::getInstance();
        $conn->prepare("INSERT INTO {$_ENV["Game_User"]}.dbo.Sys_Users_Goods( UserID, BagType,TemplateID, Place, Count, IsJudge, Color, IsExist, StrengthenLevel, AttackCompose, DefendCompose, LuckCompose, AgilityCompose, IsBinds, BeginDate, ValidDate) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")->execute(
            [1, 0, $request->TemplateID, -1, $request->Count, 1, null, 1, $request->StrengthenLevel, $request->AttackCompose, $request->DefendCompose, $request->AgilityCompose, $request->LuckCompose, $IsBind, "" . date('Y-m-d') . "T" . date('H:i:s') . "Z", $request->ValidDate]
        );

        $ItemID = $conn->lastInsertId();

        $conn->prepare("INSERT INTO {$_ENV["Game_User"]}.dbo.User_Messages( SenderID, Sender, ReceiverID, Receiver, Title, Content, SendTime, IsRead, IsDelR, IfDelS, IsDelete, Annex1, Annex2, Gold, Money, IsExist,Type,Remark, Annex1Name) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")->execute(
            [0, 'Sistema', $request->UserID, $nick, $request->Title, $request->Content, "" . date('Y-m-d') . "T" . date('H:i:s') . "Z", 0, 0, 0, 0, $ItemID, 0, 0, 0, 1, 51, "Gold:0,Money:0,Annex1:$ItemID,Annex2:,Annex3:,Annex4:,Annex5:,GiftToken:0", $itemName]
        );

        try { 
            $soap = new SoapClient($_ENV["Server_Wsdl"].'?wsdl');
            $result = $soap->MailNotice([
                "playerID" => $request->UserID,
                "zoneId" => 1001
            ]); 
        } catch (\Throwable $th) {
            
        }

        echo $this->response('response', [
            'state' => true,
            'msg' => 'Item enviado com sucesso'
        ]);
        return;
    }

}
