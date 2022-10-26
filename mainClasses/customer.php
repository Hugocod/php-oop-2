<?php

    class Customer {
        ///////////////////////////////////////////////////////////////////////////////////////////////// GENERIC ATTRIBUTE
        //Attributi Generici(necessari per ogni cliente) 
        public $address;
        public $lastname;
        public $name;
        public $credit_card;
        ///////////////////////////////////////////////////////////////////////////////////////////////// - / GENERIC ATTRIBUTE

        function __construct( $_address, $_lastname, $_name, $_credit_card,)
        {
            $this -> address = $_address;
            $this -> lastname = $_lastname;
            $this -> name = $_name;
            $this -> credit_card = $_credit_card;
        }
    }

?>