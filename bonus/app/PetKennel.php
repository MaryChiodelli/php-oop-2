<?php

include_once __DIR__ . '/Product.php';

class PetKennel extends Product
{
  public $size;
  public $materials;

  function __construct($param)
  {
    parent::__construct($param);
    $this->size = $param['size'];
    $this->materials = $param['materials'];
  }
}