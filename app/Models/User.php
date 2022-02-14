<?php

namespace App\Models;

use Libraries\DataLayer\Connect;
use Libraries\DataLayer\DataLayer;

/**
 * Class User
 * @package App\Models
 */
class User extends DataLayer
{
    protected $connection;

    protected $error_connection;

    protected $fillable = [
        'first_name',
        'last_name',
    ];

    /** 
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct("users", $this->fillable);

        $this->connection = Connect::getInstance();
        $this->error_connection = Connect::getError();
    }
    public function getSysDetail()
    {
        return $this->connection->query("SELECT * FROM {$_ENV["Game_User"]}.dbo.Sys_Users_Detail")->fetchAll();
    }
    public function getSysDetailById($id)
    {
        return $this->connection->query("SELECT * FROM {$_ENV["Game_User"]}.dbo.Sys_Users_Detail WHERE UserID = '$id'")->fetch();
    }
    public function check(string $type, int|string $value): bool
    {
        if ($type == 'mail') {
            if ($this->find("email = :e", "e={$value}")->count() >= 1) {
                return false;
            }

            if ($this->connection->query("SELECT COUNT(*) FROM Webshop_Account WHERE Email = '{$value}'")->fetchColumn() >= 1) {
                return false;
            }

            return true;
        }

        if ($type == 'nick') {
            if ($this->connection->query("SELECT COUNT(*) FROM {$_ENV["Game_User"]}.dbo.Sys_Users_Detail WHERE NickName = '{$value}'")->fetchColumn() >= 1) {
                return false;
            }

            return true;
        }
    }

    public function register(object $data)
    {
        // $u_hash = md5(uniqid(rand(1, 8888), true));
        $u_hash = "user" . rand(1, 999999999);
        $p_hash = md5(uniqid(rand(1, 9999), true));

        $this->first_name = $data->first_name;
        $this->last_name = $data->last_name;
        $this->email = $data->email;
        $this->passwd = password_hash($data->passwd, PASSWORD_DEFAULT);
        $this->u_hash = $u_hash;
        $this->p_hash = strtoupper($p_hash);
        $this->photo = 'default.jpg';

        if (!$this->save()) {
            return false;
        }

        if (!$this->create_person((object)[
            'uname' => $u_hash,
            'passwd' => strtoupper($p_hash),
            'nick' => $data->nickname,
            'mail' => $data->email,
            'sex' => $data->needsex,
        ])) {
            return false;
        }

        return true;
    }

    public function create_person(object $data)
    {
        if ($this->error_connection) {
            echo $this->error_connection->getMessage();
            return;
        }

        if ($this->connection->exec("EXEC Webshop_Register @ApplicationName=N'DanDanTang',@UserName=N'$data->uname',@password=N'" . $data->passwd . "',@email='$data->mail',@passtwo = '" . $data->passwd . "',@error = 0") !== 1) {
            return false;
        }

        if ($this->connection->exec("exec {$_ENV["Game_User"]}.dbo.SP_Users_Active @UserID='',@Attack=0,@Colors=N',,,,,,',@ConsortiaID=0,@Defence=0,@Gold=1000,@GP=25899,@Grade=10,@Luck=0,@Money=500,@Style=N',,,,,,',@Agility=0,@State=0,@UserName=$data->uname,@PassWord=N'$data->passwd',@Sex=$data->sex,@Hide=1111111111,@ActiveIP=N'',@Skin=N'',@Site=N''") !== 1) {
            return false;
        }

        if ($data->sex == 1) {
            if ($this->connection->exec("exec {$_ENV["Game_User"]}.dbo.SP_Users_RegisterNotValidate @UserName=N'" . $data->uname . "',@PassWord=N'" . $data->passwd . "',@NickName=N'" . $data->nick . "',@BArmID=7008,@BHairID=3158,@BFaceID=6103,@BClothID=5160,@BHatID=1142,@GArmID=7008,@GHairID=3158,@GFaceID=6103,@GClothID=5160,@GHatID=1142,@ArmColor=N'',@HairColor=N'',@FaceColor=N'',@ClothColor=N'',@HatColor=N'',@Sex=$data->sex,@StyleDate=0") !== 0) {
                return false;
            }
        } else {
            if ($this->connection->exec("exec {$_ENV["Game_User"]}.dbo.SP_Users_RegisterNotValidate @UserName=N'" . $data->uname . "',@PassWord=N'" . $data->passwd . "',@NickName=N'" . $data->nick . "',@BArmID=7008,@BHairID=3244,@BFaceID=6204,@BClothID=5276,@BHatID=1214,@GArmID=7008,@GHairID=3244,@GFaceID=6202,@GClothID=5276,@GHatID=1214,@ArmColor=N'',@HairColor=N'',@FaceColor=N'',@ClothColor=N'',@HatColor=N'',@Sex=$data->sex,@StyleDate=0") !== 0) {
                return false;
            }
        }

        if ($this->connection->exec("exec {$_ENV["Game_User"]}.dbo.SP_Users_LoginWeb @UserName=N'" . $data->uname . "',@Password=N'',@FirstValidate=0,@Nickname=N'" . $data->nick . "'") !== 0) {
            return false;
        }
        return true;
    }

    public function GetUserDetail(int $uid)
    {
        $u_hash = ($this->findById($uid))->u_hash;

        $stmt = $this->connection->prepare("SELECT UserID, UserName,ForbidDate, NickName, Win, Total, FightPower, Style, State, DayLoginCount, OnlineTime, Money, Grade FROM {$_ENV["Game_User"]}.dbo.Sys_Users_Detail WHERE UserName=?");
        $stmt->execute([$u_hash]);

        return $stmt->fetchObject();
    }

    public function getRankingList()
    {
        $stmt = $this->connection->prepare("SELECT TOP 5 UserID, UserName, NickName, Win, Total, FightPower, GP, Grade FROM {$_ENV["Game_User"]}.dbo.Sys_Users_Detail ORDER BY FightPower DESC");
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function CheckValidNickName(string $nick)
    {
        $stmt = $this->connection->prepare("SELECT COUNT(*) FROM {$_ENV["Game_User"]}dbo.Sys_Users_Detail WHERE NickName=?");
        $stmt->execute([$nick]);

        return $stmt->fetchColumn();
    }

    public function ChangeNickName(int $uid, string $nick)
    {
        $this->GetUserDetail($uid)->UserID;

        $stmt = $this->connection->prepare("UPDATE {$_ENV["Game_User"]}.dbo.Sys_Users_Detail SET NickName = ? WHERE UserID=? ");

        return $stmt->execute([$nick, $this->GetUserDetail($uid)->UserID]);
    }

    public function EquipList()
    {
        return $this->find("type = :t OR type = :t2", "t=2&t2=3")->fetch(true);
    }

    public function ban_in_game($bandt, $banreason, $uid)
    {
        $stmt = $this->connection->prepare("SET DATEFORMAT ymd UPDATE {$_ENV["Game_User"]}.dbo.Sys_Users_Detail SET [ForbidDate] = '$bandt', [IsExist] = 'False', [ForbidReason] = N'$banreason' WHERE UserID = N'$uid'");
        return $stmt->execute();
    }

    public function unban_in_game($uid)
    {
        $stmt = $this->connection->prepare("SET DATEFORMAT ymd UPDATE {$_ENV["Game_User"]}.dbo.Sys_Users_Detail SET [ForbidDate] = '" . date("Y/m/d H:i:s") . "', [IsExist] = 'True', [ForbidReason] = N'' WHERE UserID = N'$uid'");
        return $stmt->execute();
    }
}
