<?php
use SebastianBergmann\GlobalState\Exception;

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once( 'C:\xampp\htdocs\archertours\vendor\autoload.php' );
ini_set("display_errors", "on");

use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use PayPal\Api\Refund;
use PayPal\Api\Sale;

class Paypal {
    public $ci;
    public $pal;
    public $apiContext;
 
    public $con;

  public function __construct() {
    // Get CI object.
    $this->ci =& get_instance();

    $this->con = json_decode(json_encode($this->ci->config->config));

    $this->apiContext = new \PayPal\Rest\ApiContext(
        new \PayPal\Auth\OAuthTokenCredential(
            $this->con->paypal_dev_client_id,
            $this->con->paypal_dev_client_secret
        )
    );

  }


  public function getPayPalClient($package)
  {

        $payer = new Payer();

        $payer->setPaymentMethod("paypal");

        $redirectUrls = new RedirectUrls();

        $redirectUrls->setReturnUrl(base_url('/client/process?bookingid='.$package->bookingid))
        ->setCancelUrl(base_url('/'));

        $itemList = new ItemList();

        $items = array();

        foreach($package->items as $itm){

            $item = new Item();

            $item->setName($itm->name)
            ->setCurrency($itm->currency)
            ->setQuantity($itm->quantity)
            ->setSku($itm->id)
            ->setTax(0)
            ->setDescription($itm->desc)
            ->setPrice($itm->price);

            array_push($items,$item);

        }

        $itemList->setItems($items);

        $details = new Details();

        $details
        ->setFee(0)
        ->setSubtotal($package->total)
        ->setTax(0)
        ->setShipping(0)
        ->setShippingDiscount(0);

        
        $amount = new Amount();

        $amount->setCurrency($package->currency)
        ->setTotal($package->total)
        ->setDetails($details);


        $transaction = new Transaction();

        $transaction->setAmount($amount)
        ->setItemList($itemList)
        ->setDescription($package->desc)
        ->setInvoiceNumber("inv_atours2062_".uniqid());

        // Create the full payment object
        $payment = new Payment();

        $payment->setIntent('sale')
        ->setPayer($payer)
        ->setNoteToPayer($package->note)
        ->setRedirectUrls($redirectUrls)
        ->setTransactions(array($transaction));

        try {
            $payment->create($this->apiContext);

            $approvalUrl = $payment->getApprovalLink();

            return '<script>window.open("'.$approvalUrl.'", "Payment Portal", "height=800,width=600,resizable=no");</script>';

        } catch (PayPal\Exception\PayPalConnectionException $ex) {
            return false;
        } catch (Exception $ex) {
            return false;
        }

    
    }

    public function processPayment(){

        $paymentId = $_GET['paymentId'];
        //echo $paymentId;

        if($this->ci->cs->PaymentIdExist($paymentId) === true){
            return 200;
        }

        $payment = Payment::get($paymentId, $this->apiContext);

        $payerId = $_GET['PayerID'];

        $execution = new PaymentExecution();

        $execution->setPayerId($payerId);

        try {

            $result = $payment->execute($execution, $this->apiContext);
            
            $data = array();

            $payer = $result->getPayer();

            $payerInfo = $payer->getPayerInfo();

            $transaction = $result->getTransactions()[0];

            $resources = $transaction->getRelatedResources()[0];

            $sale = $resources->getSale();

            $item = $transaction->item_list->getItems()[0];

            $tranFee = $sale->getTransactionFee();

            $data+=array("pay_id"=>$result->getId());
            $data+=array("pay_state"=>$result->getState());
            $data+=array("payer_status"=>$payer->getStatus());
            $data+=array("payment_method"=>$payer->getPaymentMethod());
            $data+=array("payer_email"=>$payerInfo->getEmail());
            $data+=array("payer_name"=>$payerInfo->getFirstName().' '.$payerInfo->getLastName());
            $data+=array("payer_id"=>$payerInfo->getPayerId());
            $data+=array("payer_country"=>$payerInfo->getCountryCode());
            $data+=array("txn_id"=>$sale->getId());
            $data+=array("txn_state"=>$sale->getState());
            $data+=array("item_id"=>$item->getSku());
            $data+=array("item_quantity"=>$item->getQuantity());
            $data+=array("total_price"=>$sale->getAmount()->getTotal());
            $data+=array("currency"=>$sale->getAmount()->getCurrency());
            $data+=array("transaction_fee"=>$tranFee->getValue());
            $data+=array("transaction_date"=>$sale->getCreateTime());
            $data+=array("invoice_number"=>$transaction->invoice_number);

            if($this->ci->cs->InsertTransaction($data,$_GET['bookingid'])){

                return $data;
            }

            return false;

        } catch (PayPal\Exception\PayPalConnectionException $ex) {
            // return false;
            print_r($ex->getData());
        } catch (Exception $ex) {
            print_r($ex->getData());
            // return false;
        }
    }

    public function refundPayment($id, $percentage = 10){

        //call back the sale get the amount and refund percentage of amount

        $sale = new Sale();

        $result = $sale->get($id,$this->apiContext);

        $amount = $result->getAmount();
        
        $total = $amount->getTotal() * ($percentage / 100);

        $total = floor($total);

        $amt = new Amount();
        $amt->setTotal($total)
        ->setCurrency($amount->getCurrency());

        $refund = new Refund();
        $refund->setAmount($amt)
        ->setReason("")
        ->setDescription("");

        $sale = new Sale();
        $sale->setId($id);

        try {
        $refundedSale = $sale->refund($refund, $this->apiContext);
        print_r($refundedSale);
        } catch (PayPal\Exception\PayPalConnectionException $ex) {
            return false;
        } catch (Exception $ex) {
            return false;
        }
    }

    


}
?>