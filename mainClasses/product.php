<?php

    class Product {
        ///////////////////////////////////////////////////////////////////////////////////////////////// GENERIC ATTRIBUTE
        //Attributi Generici(necessari per ogni prodotto) 
        public $price;
        public $availability;
        public $name;
        public $description;
        public $photo;
        ///////////////////////////////////////////////////////////////////////////////////////////////// - / GENERIC ATTRIBUTE

        function __construct( $_price, $_availability, $_name, $_description, $_photo )
        {
            $this -> price = $_price;
            $this -> availability = $_availability;
            $this -> name = $_name;
            $this -> description = $_description;
            $this -> photo = $_photo;
        }
    }

?>


