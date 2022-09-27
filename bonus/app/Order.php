<?php

include_once __DIR__ . '/Product.php';

class Order
{
  public $name;
  public $address;
  public $cart = [];
  public $base_price = 0;
  public $shipping_cost;
  public $final_price;

  function __construct($param) {
    $this->name = $param['name'];
    $this->address = $param['address'];
  }

  public function addToCart($product, $quantity) {
    $this->cart[] = [
      'name' => $product->name,
      'price' => $product->price,
      'quantity' => $quantity
    ];

    $this->setBasePrice();
    $this->setShippingCost();

    $this->final_price = $this->base_price + $this->shipping_cost;
  }

  public function setBasePrice() {
    $sum = 0;
    foreach($this->cart as $p) {
      $price = $p['price'] * $p['quantity'];
      $sum += $price;
    }
    return $this->base_price = $sum;
  }

  public function setShippingCost() {
    if ($this->base_price > 200) {
      $this->shipping_cost = 0;
    } else {
      $this->shipping_cost = 80;
    }
  }
}