<?php
    namespace Models\Invoiced;
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    use Models\Invoiced\Invoice;

    class SerializeInvoice{

        public $invoice = array();

        function __construct(Invoice $invoice)
        {
            $this->invoice = json_encode($invoice, JSON_PRETTY_PRINT);
        }

    }
?>