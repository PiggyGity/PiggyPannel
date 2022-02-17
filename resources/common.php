<?php

use App\Models\Config;
use App\Models\Invoice;
use App\Models\Itens;
use App\Models\Product;
use App\Models\User;

function reduz_numero($n)
{
    if ($n < 0) {
        return "-" . reduz_numero(-$n);
    }
    $k = "";
    while (round($n) >= 1000) {
        $k = $k . "k";
        $n = $n / 1000;
    }
    return round($n) . $k;
}

function checkPayments($uid)
{
    if ($invoices = (new Invoice())->find("uid = :u AND state != :st", "u=$uid&st=approved")->fetch(true)) {
        foreach ($invoices as $invoice) {
            checkPaymentByMp($invoice->reference);
        }
    }
}

function checkPaymentByMp($reference, string $token = null)
{
    if (!$token) {
        $token = config("payment.access_token");
    }
    $result = json_decode(file_get_contents("https://api.mercadopago.com/v1/payments/search?sort=date_created&criteria=desc&external_reference=$reference&access_token=$token#json"));

    if (!$result->results) {
        return;
    }

    $invoice = new Invoice();
    $fatura = $invoice->find("reference = :ref", "ref=$reference")->fetch();
    $pinfo = (new Product())->findById($fatura->pid);

    if ($result->results[0]->status == "approved") {
        //Aqui foi pago e aprovado so salvar no banco e enviar os cupons external_reference
        $fatura->invoiceid = $result->results[0]->id;
        $fatura->state = $result->results[0]->status;
        $user = (new User())->findById($_SESSION['uid']);

        if ($fatura->is_send != 1) {
            $data = [
                $reference,
                $user->u_hash,
                $pinfo->ammount,
                1,
                'Mercado Pago',
                00.00,
                '10.1.0.4',
                udetail_by_uid($fatura->uid)->NickName
            ];
            if ((new Product())->createChargeMoney($data)) {
                $fatura->is_send = 1;

                if ($pinfo->IsReward) {
                    (new Product())->SendRewardRecharge($fatura->uid, $fatura->pid);
                }

                try {
                    $soap = new SoapClient($_ENV["Server_Wsdl"] . '?wsdl');
                    $result = $soap->ChargeMoney([
                        "userID" => intval(udetail_by_uid($fatura->uid)->UserID),
                        "chargeID" => (string) $reference,
                        "zoneId" => 1001

                    ]);
                } catch (\Throwable $th) {
                    throw $th;
                }
            }
        }
    } else {
        //Cupon ainda nao foi pago, sei la oq q deu nessa bagaça mas é so salvar no banco tbm kk
        $fatura->invoiceid = $result->results[0]->id;
        $fatura->state = $result->results[0]->status;
        $fatura->is_send = 0;
    }

    if (!$fatura->save()) {
        echo 'erro ao atualiza fatura';
        return;
    }
}

function udata_by_username_in_game($user)
{
    return (new User())->find("u_hash = :u", "u=$user")->fetch();
}

function udetail_by_uid($id)
{
    return (new User())->GetUserDetail($id);
}

function product_data(?int $id)
{
    return (new Product())->findById($id);
}

function dateString($month)
{
    $month = (string) $month;

    return match ($month) {
        "01" => "Jan",
        "02" => "Fev",
        "03" => "Mar",
        "04" => "Abr",
        "05" => "Mai",
        "06" => "Jun",
        "07" => "Jul",
        "08" => "Ago",
        "09" => "Set",
        "10" => "Out",
        "11" => "Nov",
        "12" => "Dez",
    };
}

function dd($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    die();
}

function config($parameter)
{
    $data = explode('.', $parameter);

    if (!file_exists($path = realpath(dirname(__DIR__, 1) . "/config/{$data[0]}.php"))) {
        return "config file [{$data[0]}] not found";
    }

    $config = require $path;

    if (!isset($config[$data[1]])) {
        return "config name [{$config[$data[1]]}] not found on config file [{$data[0]}].";
    }

    return $config[$data[1]];
}

$_SESSION['valid_domain'] = "";

function getImage($type, $filename)
{
    $url = config('app.url');
    return "$url/getimage?path=$type/$filename";
}


function timeAgo(int $time_ago)
{
    $cur_time     = time();
    $time_elapsed     = $cur_time - $time_ago;
    $seconds     = $time_elapsed;
    $minutes     = round($time_elapsed / 60);
    $hours         = round($time_elapsed / 3600);
    $days         = round($time_elapsed / 86400);
    $weeks         = round($time_elapsed / 604800);
    $months     = round($time_elapsed / 2600640);
    $years         = round($time_elapsed / 31207680);
    // Seconds
    if ($seconds <= 60) {
        return "$seconds segundos atrás";
    }
    //Minutes
    elseif ($minutes <= 60) {
        if ($minutes == 1) {
            return "1 minuto atrás";
        } else {
            return "$minutes minutos atrás";
        }
    }
    //Hours
    elseif ($hours <= 24) {
        if ($hours == 1) {
            return "uma hora atrás";
        } else {
            return "$hours horas atrás";
        }
    }
    //Days
    elseif ($days <= 7) {
        if ($days == 1) {
            return "hoje";
        } else {
            return "$days dias atrás";
        }
    }
    //Weeks
    elseif ($weeks <= 4.3) {
        if ($weeks == 1) {
            return "1 semana atrás";
        } else {
            return "$weeks semanas atrás";
        }
    }
    //Months
    elseif ($months <= 12) {
        if ($months == 1) {
            return "1 mes atrás";
        } else {
            return "$months meses atrás";
        }
    }
    //Years
    else {
        if ($years == 1) {
            return "1 ano atrás";
        } else {
            return "$years anos atrás";
        }
    }
}

function loadImageItem($id, ?bool $equip = false): string
{
    if (empty($id) || is_null($id)) {
        return false;
    }
    if (!$data = (new Itens())->find("TemplateID = :id", "id={$id}")->fetch()) {
        return false;
    }

    $sex = $data->NeedSex;
    $cat = (int) $data->CategoryID;
    $pic = $data->Pic;

    $resUrl = config('app.resource');

    $sexChang = match ($sex) {
        '1' => 'm',
        '2' => 'f',
        default => 'f',
    };

    if ($equip) {
        $img = match ($cat) {
            1 => "equip/$sexChang/head/$pic/1/show.png",
            3 => "equip/$sexChang/hair/$pic/1/a/show.png",
            4 => "equip/$sexChang/eff/$pic/1/show.png",
            5 => "equip/$sexChang/cloth/$pic/1/show.png",
            6 => "equip/$sexChang/face/$pic/1/show.png",
            7 => "arm/$pic/1/0/show.png",

            default => false,
        };
    }

    if (!$equip) {
        $img = match ($cat) {
            1 => "equip/$sexChang/head/$pic/icon_1.png",
            2 => "equip/$sexChang/glass/$pic/icon_1.png",
            3 => "equip/$sexChang/hair/$pic/icon_1.png",
            4 => "equip/$sexChang/eff/$pic/icon_1.png",
            5 => "equip/$sexChang/cloth/$pic/icon_1.png",
            6 => "equip/$sexChang/face/$pic/icon_1.png",
            7 => "arm/$pic/00.png",
            8 => "equip/armlet/$pic/icon.png",
            9 => "equip/ring/$pic/icon.png",
            11 => "unfrightprop/$pic/icon.png",
            12 => "equip/$sexChang/suits/$pic/icon_1.png",
            13 => "equip/$sexChang/suits/$pic/icon_1.png",
            14 => "equip/necklace/$pic/icon.png",
            15 => "equip/wing/$pic/icon.png",
            16 => "specialprop/chatBall/$pic/icon.png",
            17 => "equip/offhand/$pic/icon.png",
            18 => "cardbox/$pic/icon.png",
            27 => "arm/$pic/00.png",
            34 => "unfrightprop/$pic/icon.png",
            35 => "unfrightprop/$pic/icon.png",
            40 => "unfrightprop/$pic/icon.png",
            50 => "petequip/arm/$pic/icon.png",
            51 => "petequip/hat/$pic/icon.png",
            52 => "petequip/cloth/$pic/icon.png",
            62 => "unfrightprop/$pic/icon.png",
            64 => "arm/$pic/00.png",
            69 => "unfrightprop/$pic/icon.png",
            70 => "equip/amulet/$pic/1/icon.png",
            72 => "unfrightprop/$pic/icon.png",
            73 => "prop/$pic/icon.png",
            74 => "rune/$pic/2.png",
            default => false,
        };
    }


    return "$resUrl/image/$img";
}

function web_config(string $key)
{
    $config = new Config();

    if (!$configs = $config->find()->fetch(true)) {
        return false;
    }

    foreach ($configs as $row) {
        if ($row->key_c == $key) {
            return $row->value_c;
        }
    }
}
function xml_attribute($object, $attribute)
{
    if (isset($object[$attribute])) {
        return (string) $object[$attribute];
    }
}
function base_url(?string $path = null): string
{
    if ($path) {
        return config('app.url') . "/$path";
    }

    return config('app.url');
}

function clientIP()
{
    $ip = null;

    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }

    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    if (!$ip) {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

    return $ip;
}

function get_percentage($total, $number)
{
    if ($total > 0) {
        return round(($number * 100) / $total, 2);
    } else {
        return 0;
    }
}

function hoursandmins($time, $format = '%02d:%02d')
{
    if ($time < 1) {
        return;
    }
    $hours = floor($time / 60);
    $minutes = ($time % 60);
    return sprintf($format, $hours, $minutes);
}
