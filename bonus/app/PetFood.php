<?php

include_once __DIR__ . '/Product.php';

class PetFood extends Product
{
  public $weight;
  public $ingedients;

  function __construct($param)
  {
    parent::__construct($param);
    $this->weight = $param['weight'];
    $this->ingredients = $param['ingredients'];
  }
}