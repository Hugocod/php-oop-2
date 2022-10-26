<?php

    require_once __DIR__.'/creditCard.php';

    class Customer {
        ///////////////////////////////////////////////////////////////////////////////////////////////// GENERIC ATTRIBUTE
        //Attributi Generici(necessari per ogni cliente) 
        public $address;
        public $lastname;
        public $name;
        public $credit_card;
        ///////////////////////////////////////////////////////////////////////////////////////////////// - / GENERIC ATTRIBUTE

        function __construct( 
            $_address, $_lastname, $_name, $_number,
            /* per la carta di credito */
            $_cvv, $_expiration_date, $_card_owner
            
            )
        {
            $this -> address = $_address;
            $this -> lastname = $_lastname;
            $this -> name = $_name;
            $this -> credit_card = new CreditCard($_number, $_cvv, $_expiration_date, $_card_owner,);
        }
    }

?>