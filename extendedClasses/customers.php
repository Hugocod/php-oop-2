<?php

require_once __DIR__ . '/../mainClasses/customer.php'; // importo la classe che andrà inclusa nelle classi extended

class RegisteredCustomer extends Customer{

    ///////////////////////////////////////////////////////////////////////////////////////////////// SPECIFIC ATTRIBUTE
    //Attributi specifici(necessari per FoodProduct) 
    public $email;
    public $coupon;
    public $nick_name;
    ///////////////////////////////////////////////////////////////////////////////////////////////// - / SPECIFIC ATTRIBUTE

    function __construct( $_email, $_coupon, $_nick_name)
    {
        $this -> email = $_email;
        $this -> coupon = $_coupon;
        $this -> nick_name = $_nick_name;
    }

}


?>