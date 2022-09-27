<?php

include_once __DIR__ . '/Product.php';

class Order
{
  public $name;
  public $address;
  public $cart = [];
  public $price;

  function __construct($param) {
    $this->name = $param['name'];
    $this->address = $param['address'];
  }

  public function addToCart($product, $quantity) {
    $this->cart[] = [$product->name, $quantity];
  }
}