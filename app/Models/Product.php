<?php

namespace App\Models;

use Exception;
use Libraries\DataLayer\Connect;
use Libraries\DataLayer\DataLayer;
use SoapClient;

/**
 * Class User
 * @package App\Models
 */
class Product extends DataLayer
{
    protected $connection;

    protected $error_connection;

    protected $fillable = [
        'name',
    ];

    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct("products", $this->fillable);

        $this->connection = Connect::getInstance();
        $this->error_connection = Connect::getError();
    }

    public function createChargeMoney(array $data)
    {
        $sql = "INSERT INTO {$_ENV["Game_User"]}.dbo.Charge_Money (ChargeID, UserName, Money, Date, CanUse, PayWay, NeedMoney, IP, NickName) VALUES (?,?,?,GETDATE(),?,?,?,?,?)";

        if (!$this->connection->prepare($sql)->execute($data)) {
            throw new Exception($this->error_connectio);
            return false;
        }

        return true;
    }

    public function SendRewardRecharge($uid, $pid)
    {
        $nick = udetail_by_uid($uid)->NickName;
        $userid = udetail_by_uid($uid)->UserID;

        $reward_list = $this->connection->query("SELECT * FROM products_reward WHERE pid = '$pid'")->fetchAll();

        if (count($reward_list) > 5) {
        }

        $list = [];

        foreach ($reward_list as $reward) {
            $sql = "INSERT INTO {$_ENV["Game_User"]}.dbo.Sys_Users_Goods( UserID, BagType,TemplateID, Place, Count, IsJudge, Color, IsExist, StrengthenLevel, AttackCompose, DefendCompose, LuckCompose, AgilityCompose, IsBinds, BeginDate, ValidDate) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?, getdate(),?)";
            if (!$this->connection->prepare($sql)->execute([$userid, 0, $reward->TemplateID, -1, $reward->Count, 1, null, 1, 0, 0, 0, 0, $reward->IsBinds, 1, $reward->valid])) {
                echo $this->error_connection;
                return false;
            }

            $itemIDFinal = $this->connection->lastInsertId();

            $list[] = $itemIDFinal;
        }

        unset($sql);

        foreach ($list as $itemID) {
            $sql = "INSERT INTO {$_ENV["Game_User"]}.dbo.User_Messages( SenderID, Sender, ReceiverID, Receiver, Title, Content, SendTime, IsRead, IsDelR, IfDelS, IsDelete, Annex1, Annex2, Gold, Money, IsExist,Type,Remark) VALUES (?,?,?,?,?,?,getdate(),?,?,?,?,?,?,?,?,?,?,?)";
            if (!$this->connection->prepare($sql)->execute([0, 'Sistema', $userid, $nick, 'Recompensa de recarga', 'Ola jogador voce efetuou uma recarga e recebeu esta(s) recompensa(s).', 0, 0, 0, 0, $itemID, 0, 0, 0, 1, 51, "Gold:0,Money:0,Annex1:$itemID,Annex2:,Annex3:,Annex4:,Annex5:,GiftToken:0"])) {
                echo $this->error_connection;
                return false;
            }
        }

        try {
            $soap = new SoapClient($_Env["Server_Wsdl"].'?wsdl');
            $soap->MailNotice([
                "playerID" => $userid,
                "zoneId" => 1001
            ]); 
        } catch (\Throwable $th) {
            
        }

        return true;
    }
}
