<?php

class Cart {


    public $cart = [];
    private static $cartObject = null;

    static public function getCart()
    {
        if(self::$cartObject === null) {
            self::$cartObject = new self;
            return self::$cartObject;
        }
        
        return self::$cartObject;
    }
    

    private function __construct()
    {
        
    }

    public function add($product)
    {
        $this->cart[] = $product;
    }
}