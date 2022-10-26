<?php

    class CreditCard {
        ///////////////////////////////////////////////////////////////////////////////////////////////// GENERIC ATTRIBUTE
        //Attributi Generici(necessari per ogni carta)
        public $number;
        public $cvv;
        public $expiration_date;
        public $card_owner;
        ///////////////////////////////////////////////////////////////////////////////////////////////// - / GENERIC ATTRIBUTE

        function __construct( $_number, $_cvv, $_expiration_date, $_card_owner,)
        {
            $this -> number = $_number;
            $this -> cvv = $_cvv;
            $this -> expiration_date = $_expiration_date;
            $this -> card_owner = $_card_owner;
        }
    }

?>