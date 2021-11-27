<?php

require_once 'Basket.php';
require_once 'Order.php';
require_once 'BasketPosition.php';
require_once 'Product.php';
//$obj = new Basket([new Product('twix', 60)]);
//данная реализация предусматривает, что если у нас в корзине уже существует продукт с определенной ценой,
//то новый продукт с таким же именем не может иметь другую цену, что звучит вполне логично ;)
//$oneProduct = new Product('twix', 60); // создаем продукт
$basket = new Basket(); // инициализируем корзину
$basket->addProduct(new Product('twix', 60), 3);
$basket->addProduct(new Product('twix', 60), 2); //добавляем элемент в корзину с таким же именем для теста объединения
$basket->addProduct(new Product('snickers', 60), 3);
$order = new Order($basket); // инициализируем заказ
echo "\n\n<br/><br/><----------------------------------->";
echo "\n<br/>Цена в корзине: ".$basket->getPrice();
echo "\n<br/>Цена при заказе со скидкой: ".$order->getPrice();
echo "\n<br/><-----------------------------------><br/>\n";
echo "\n<br/>Заказ на сумму: <".$order->getPrice()."> Состав: ";
$basket->describe();