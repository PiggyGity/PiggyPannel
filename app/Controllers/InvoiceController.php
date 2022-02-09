<?php

namespace App\Controllers;

use App\Models\Invoice as InvoiceModel;
use App\Models\Product;
use App\Models\User;
use MercadoPago;
use MercadoPago\Invoice;
use SoapClient;

class InvoiceController extends BaseController
{
    public function create(?array $data): void
    {
        $pid = filter_var($data['pid'], FILTER_SANITIZE_STRIPPED);
        $uid = $_SESSION['uid'];
        if (empty($pid) || !isset($pid)) {
            echo 'product_id not definied.';
            return;
        }

        $product = (new Product())->findById($pid);
        $invoice = new InvoiceModel;
        $ereference = "invoice-" . uniqid(rand(1111, 9999));

        //https://www.yourserver.com/notifications?source_news=ipn

        if ($inovice_data = $invoice->find("uid = :u AND pid = :p AND state = :st1", "u=$uid&p=$pid&st1=created")->fetch()) {
            $ereference = $inovice_data->reference;
            // echo "fatura ja existia portanto foi carreado os valores ja existentes";
        } else {
            $invoice->uid = $_SESSION['uid'];
            $invoice->pid = $product->id;
            $invoice->state = "created";
            $invoice->method = "mercado_pago";
            $invoice->value = number_format($product->value, 2);
            $invoice->reference = $ereference;
            $invoice->is_send = 0;

            if (!$invoice->save()) {
                echo "erro ao gerar fatura nova :( \n" . PHP_EOL;
                dd($invoice);
            }
            $inovice_data = $invoice->find("uid = :u AND pid = :p AND state = :st1", "u=$uid&p=$pid&st1=created")->fetch();
            // echo "fatura nao existia mais foi criada agora";
        }

        echo $this->view->render('invoice', [
            "invoice_data" => $inovice_data,
            "product_data" => (new Product)->findById($pid),
            "mp_data" => $this->create_mp($pid, $ereference)
        ]);
        return;
    }

    public function detail(?array $data): void
    {
        $id = filter_var($data['id'], FILTER_SANITIZE_STRIPPED);

        if (empty($id) || !isset($id)) {
            echo 'inovice_id not definied.';
            return;
        }

        $invoice = (new InvoiceModel())->findById($id);

        if ($invoice->uid != $_SESSION['uid']) {
            die('fatura desconhecida');
        }

        echo $this->view->render('invoice_detail', [
            "invoice_data" => $invoice,
            "product_data" => (new Product)->findById($invoice->pid)
        ]);
        return;
    }

    public function list()
    {
    }

    public function create_mp($pid, $reference)
    {
        $product = (new Product())->findById($pid);

        MercadoPago\SDK::setAccessToken(config("payment.access_token"));

        $preference = new MercadoPago\Preference();

        $item = new MercadoPago\Item();
        $item->title = $product->name;
        $item->quantity = 1;
        $item->unit_price = number_format($product->value, 2);

        $preference->items = [$item];
        $preference->notification_url = base_url('payment/notifications');
        $preference->external_reference = $reference;

        $preference->save();

        return $preference;
    }

    public function notifications()
    {
        MercadoPago\SDK::setAccessToken(config("payment.access_token"));

        $merchant_order = null;

        $merchant_order = null;

        switch ($_REQUEST["topic"]) {
            case "payment":
                $payment = MercadoPago\Payment::find_by_id($_REQUEST["id"]);
                // Get the payment and the corresponding merchant_order reported by the IPN.
                $merchant_order = MercadoPago\MerchantOrder::find_by_id($payment->order->id);
                break;
            case "merchant_order":
                $merchant_order = MercadoPago\MerchantOrder::find_by_id($_REQUEST["id"]);
                break;
            default:
                $merchant_order = MercadoPago\MerchantOrder::find_by_id($_REQUEST["id"]);
                break;
        }

        $paid_amount = 0;
        foreach ($merchant_order->payments as $payment) {
            if ($payment->status == 'approved') {
                $paid_amount += $payment->transaction_amount;
            }
        }

        $invoice = new InvoiceModel;
        $fatura = $invoice->find("reference = :ref", "ref=$merchant_order->external_reference")->fetch();
        $pinfo = (new Product)->findById($fatura->pid);
        if ($paid_amount >= $merchant_order->total_amount) {
            //Aqui foi pago e aprovado so salvar no banco e enviar os cupons external_reference
            $fatura->invoiceid = $_REQUEST["id"];
            $fatura->state = $merchant_order->payments[0]->status;
            $user = (new User)->findById($fatura->uid);

            if ($fatura->is_send != 1) {
                $data = [
                    $merchant_order->external_reference,
                    $user->u_hash,
                    $pinfo->ammount,
                    1,
                    'Mercado Pago',
                    00.00,
                    '10.1.0.4',
                    udetail_by_uid($fatura->uid)->NickName
                ];
                if ((new Product)->createChargeMoney($data)) {
                    $fatura->is_send = 1;
                    if ($pinfo->IsReward) {
                        (new Product)->SendRewardRecharge($_SESSION['uid'], $fatura->pid);
                    }

                    try {
                        $soap = new SoapClient('http://10.1.0.4:1008/CenterService/?wsdl');
                        $result = $soap->ChargeMoney([
                            "userID" => (int) udetail_by_uid($_SESSION['uid'])->UserID,
                            "chargeID" => (string) $merchant_order->external_reference,
                            "zoneId" => 1001

                        ]);
                    } catch (\Throwable $th) {
                    }
                }
            }
        } else {
            //Cupon ainda nao foi pago, sei la oq q deu nessa bagaça mas é so salvar no banco tbm kk
            $fatura->invoiceid = $_REQUEST["id"];
            $fatura->state = $merchant_order->payments[0]->status;
            $fatura->is_send = 0;
        }

        if (!$fatura->save()) {
            echo 'erro ao salvar fatura';
            return;
        }

        echo 'tduo certu puraqis';
        //dd($payment);
    }
}
