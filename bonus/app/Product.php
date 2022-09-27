<?php

class Product
{
  public $name;
  public $cover;
  public $price;
  public $brand;
  public $shipping_weight;

  function __construct($param) {
    $this->name = $param['name'];
    $this->cover = $param['cover'];
    $this->price = $param['price'];
    $this->brand = $param['brand'];
    $this->shipping_weight = $param['shipping_weight'];
  }
}