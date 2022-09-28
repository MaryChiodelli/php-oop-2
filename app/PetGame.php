<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Materials.php';

class PetGame extends Product
{
  use Materials;
  public $size;

  function __construct($param)
  {
    parent::__construct($param);
    $this->size = $param['size'];
    $this->materials = $param['materials'];
  }
}