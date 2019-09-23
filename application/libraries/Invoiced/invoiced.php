<?php

use SebastianBergmann\GlobalState\Exception;

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once(APPPATH.'libraries\Invoiced\Invoice.php');
require_once(APPPATH.'libraries\Invoiced\InvoiceFields.php');
require_once(APPPATH.'libraries\Invoiced\Items.php');
require_once(APPPATH.'libraries\Invoiced\SerializeInvoice.php');
//C:\xampp\htdocs\archertours\application\models\Invoiced
ini_set("display_errors", "on");

use Models\Invoiced\Invoice;
use Models\Invoiced\InvoiceFields;
use Models\Invoiced\Items;
use Models\Invoiced\SerializeInvoice;

class Invoiced {

    public function Invoice(){

        $inv = new Invoice();

        $fields = new InvoiceFields();

        $item = new Items();

        $item->quantity = 10;

        $item->unit_cost = 90;

        $item->description = "I am a cool product";

        $items = array();

        array_push($items,$item);



        $inv->logo = "cool";
        $inv->from = "Jordaine";
        $inv->to = "Avantmark.com";
        $inv->number = "12345";
        $inv->date = date("F d, Y");
        $inv->due_date = date("F d, Y");
        $inv->fields = $fields;
        $inv->tax = 7;
        $inv->shipping = 15;
        $inv->items = $items;

        $serializer = new SerializeInvoice($inv);


        // return $serializer->invoice;
        return $serializer->invoice;
    }

}

?>