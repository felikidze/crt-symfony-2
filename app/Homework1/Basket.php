<?php

require_once 'Basket.php';
require_once 'Order.php';
require_once 'BasketPosition.php';
require_once 'Product.php';
class Basket
{
    private array $goods; // type: BasketPosition[]

    public function __construct()
    {
        $this->goods = [];
    }

    // позицию и добавляет её в корзину, объединение количества товаров
    // можно не реализовывать
    public function addProduct(Product $product, $quantity) {
        $flag = 0;
        foreach ($this->goods as $el){
            if($el->getProduct()==$product->getName()){
                echo "PRODUCT WITH NAME '". $el->getProduct() ."' ALREADY EXIST WITH QUANTITY = ".$el->getQuantity();
                $el->setQuantity($el->getQuantity()+$quantity);
                echo "\n<br/>NEW QUANTITY = ".$el->getQuantity();
                $flag = 1;
            }
        }
        //если такого продукта в корзине нет - пушим его в массив товаров
        if($flag == 0){
                array_push($this->goods, new BasketPosition($product, $quantity));
        }
    }

    // возвращает стоимость всех позиций в корзине
    public function getPrice() {
        $totalPrice = 0;
        foreach ($this->goods as $el){
            $totalPrice+=$el->getPrice()*$el->getQuantity();//умножаем цену элемента в корзине на количество
        }
        return $totalPrice;
    }

    //выводит или возвращает информацию о
    //корзине в виде строки: "<Наименование товара> - <Цена одной позиции> - <Количество>"
    public function describe() {
        echo "\n<br/><Наименование товара> - <Цена одной позиции> - <Количество>";
        foreach ($this->goods as $el){
            echo "<br/>| ".$el->getProduct()." | - | ".$el->getPrice()." | - | ".$el->getQuantity()." |";
        }
    }

}