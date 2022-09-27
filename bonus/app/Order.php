<?php

include_once __DIR__ . '/Product.php';

class Order
{
  public $name;
  public $address;
  public $cart = [];
  public $price = 0;
  public $weight = 0;
  public $shipping_cost = 10;

  function __construct($param) {
    $this->name = $param['name'];
    $this->address = $param['address'];
  }

  public function addToCart($product, $quantity) {
    $this->cart[] = [
      'name' => $product->name,
      'price' => $product->price,
      'shipping_weight' => $product->shipping_weight,
      'quantity' => $quantity
    ];

    $this->setPrice();
    $this->setWeight();
    $this->setShippingCost();

    $this->price += $this->shipping_cost;
  }

  public function setPrice() {
    $tot_price = 0;
    foreach($this->cart as $p) {
      $price = $p['price'] * $p['quantity'];
      $tot_price += $price;
    }
    return $this->price = $tot_price;
  }

  public function setWeight() {
    $tot_weight = 0;
    foreach($this->cart as $p) {
      $weight = $p['shipping_weight'] * $p['quantity'];
      $tot_weight += $weight;
    }
    return $this->weight = $tot_weight;
  }

  public function setShippingCost() {
    if ($this->price > 200){
      $this->shipping_cost = 0;
    } else if ($this->weight > 100) {
      $this->shipping_cost = 50;
    } else if ($this->weight > 200) {
      $this->shipping_cost = 80;
    } else if ($this->weight > 300) {
      $this->shipping_cost = 120;
    }
  }
}