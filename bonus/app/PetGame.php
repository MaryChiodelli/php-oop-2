<?php

include_once __DIR__ . '/Product.php';

class PetGame extends Product
{
  public $size;
  public $material;

  function __construct($param)
  {
    parent::__construct($param);
    $this->size = $param['size'];
    $this->material = $param['material'];
  }
}