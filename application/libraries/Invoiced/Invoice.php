<?php

    namespace Models\Invoiced;

    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    use Models\Invoiced\InvoiceFields;

    class Invoice{

        public $logo;

        public $from;

        public $to;

        public $number;

        public $purchase_order;

        public $date;

        public $payment_terms;

        public $due_date;

        public $items = array();

        public $discounts = 0;

        public $tax = 0;

        public $shipping = 0;

        public $amount_paid = 0;

        public $notes;

        public $terms;

        public $fields;

        function __construct() {
            $this->fields = new InvoiceFields();
        }

    }

?>