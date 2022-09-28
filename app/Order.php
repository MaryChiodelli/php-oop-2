<?php

include_once __DIR__ . '/Product.php';

class Order
{
  public $name;
  public $address;
  public $cart = [];
  public $price = 0;

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
    $this->setPrice();
  }

  public function setPrice() {
    $sum = 0;
    foreach($this->cart as $p) {
      $price = $p['price'] * $p['quantity'];
      $sum += $price;
    }
    return $this->price = $sum;
  }

  public function getCart() {
    return $this->cart;
  }

  public function sendOrder() {
    if (!$this->cart) {
      throw new Exception('Il carrello è vuoto.');
    } else {
      echo 'Ordine avvenuto con successo';
    }
  }
}