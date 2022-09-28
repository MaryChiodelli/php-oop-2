<?php

include_once __DIR__ . '/Product.php';
include_once __DIR__ . '/Materials.php';

class PetKennel extends Product
{
  public $size;
  use Materials;

  function __construct($param)
  {
    parent::__construct($param);
    $this->size = $param['size'];
    $this->materials = $param['materials'];
  }
}