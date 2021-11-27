<?php

require_once 'Basket.php';
require_once 'Order.php';
require_once 'BasketPosition.php';
require_once 'Product.php';
class BasketPosition
{
    private Product $product;
    private int $quantity;

    public function __construct($product, $quantity)
    {
        $this->product=$product;
        $this->quantity=$quantity;
    }

    // возвращает наименование товара в этой позиции
    public function getProduct() {
        return $this->product->getName();
    }

    // возвращает количество товаров в этой позиции
    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($value) {
        return $this->quantity=$value;
    }

    //  возвращает стоимость позиции.
    public function getPrice() {
        return $this->product->getPrice();
    }

}