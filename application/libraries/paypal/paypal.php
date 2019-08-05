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



  public function getPayPalClient(){
        // Create new payer and method
    $payer = new Payer();
    $payer->setPaymentMethod("paypal");

    // Set redirect URLs
    $redirectUrls = new RedirectUrls();
    $redirectUrls->setReturnUrl(base_url('/client/process'))
    ->setCancelUrl(base_url('/'));

    //setting up items

    $item = new Item();

    $item->setName('Jimmy Clif Blvd.')
    ->setCurrency('USD')
    ->setQuantity(1)
    ->setSku("123123")
    ->setPrice(10);

    $itemList = new ItemList();
    $itemList->setItems(array($item));

    // Set payment amount
    $amount = new Amount();
    $amount->setCurrency("USD")
    ->setTotal(10);

    // Set transaction object
    $transaction = new Transaction();
    $transaction->setAmount($amount)
    ->setItemList($itemList)
    ->setDescription("Payment description")
    ->setInvoiceNumber("INV1062".uniqid());

    // Create the full payment object
    $payment = new Payment();
    $payment->setIntent('sale')
    ->setPayer($payer)
    ->setNoteToPayer("Please note this is a note to you")
    ->setRedirectUrls($redirectUrls)
    ->setTransactions(array($transaction));

    try {
        $payment->create($this->apiContext);
        
        // Get PayPal redirect URL and redirect the customer
        $approvalUrl = $payment->getApprovalLink();

        echo '<script>window.open("'.$approvalUrl.'", "Payment Portal", "height=500,width=400,resizable=no");</script>';

        } catch (PayPal\Exception\PayPalConnectionException $ex) {
        echo $ex->getCode();
        echo $ex->getData();
        die($ex);
        } catch (Exception $ex) {
        die($ex);
        }

    
}

    public function processPayment(){
        $paymentId = $_GET['paymentId'];
        $payment = Payment::get($paymentId, $this->apiContext);
        $payerId = $_GET['PayerID'];

        $execution = new PaymentExecution();
        $execution->setPayerId($payerId);

        try {
            // Execute payment
            $result = $payment->execute($execution, $this->apiContext);
            
            $data = array();

          //print_r($result);

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
            $data+=array("transaction_state"=>$sale->getState());
            $data+=array("item_id"=>$item->getSku());
            $data+=array("item_quntity"=>$item->getQuantity());
            $data+=array("total_price"=>$item->getPrice());
            $data+=array("currency"=>$item->getCurrency());
            $data+=array("transaction_fee"=>$tranFee->getValue());
            $data+=array("transaction_date"=>$sale->getCreateTime());
            $data+=array("invoice_number"=>$transaction->invoice_number);

            print_r($data);
            // print_r($result->getTransactions()[0]->getRelatedResources()[0]->getSale()->getId());
            // print_r($result->getTransactions()[0]->getRelatedResources()[0]->getSale()->getState());
            // print_r($result->getTransactions()[0]->getRelatedResources()[0]->getSale()->getTransactionFee()->getValue());
            // print_r($result->getTransactions()[0]->getRelatedResources()[0]->getSale()->getTransactionFee()->getCurrency());//[0]->getPurchaseUnitReferenceId()
           return $result->getTransactions()[0]->getRelatedResources()[0]->getSale()->getId();
            } catch (PayPal\Exception\PayPalConnectionException $ex) {
            echo $ex->getCode();
            echo $ex->getData();
            die($ex);
        } catch (Exception $ex) {
            die($ex);
        }
    }

    public function refundPayment($id){

        

        $amt = new Amount();
        $amt->setTotal(7.00)
        ->setCurrency('USD');

        $refund = new Refund();
        $refund->setAmount($amt);

        $sale = new Sale();
        $sale->setId($id);

        try {
        $refundedSale = $sale->refund($refund, $this->apiContext);
        print_r($refundedSale);
        } catch (PayPal\Exception\PayPalConnectionException $ex) {
        echo $ex->getCode();
        echo $ex->getData();
        die($ex);
        } catch (Exception $ex) {
        die($ex);
        }
    }

    


}
?>