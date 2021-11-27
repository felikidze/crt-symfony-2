<?php

require_once 'Basket.php';
require_once 'Order.php';
require_once 'BasketPosition.php';
require_once 'Product.php';
class Order
{
    private float $price;
    private Basket $basket;

    public function __construct(Basket $basket)
    {
        $this->basket=$basket;
        $this->price=$basket->getPrice();
    }

    public function getBasket(){
        return $this->basket;
    }

    public function getPrice(){
        return $this->price*0.85; // скидочка 15 процентов ;)
    }
}