<?php

trait Materials
{
  public $materials;

  public function getMaterials() {
    return $this->materials;
  }

  public function setMaterials($param) {
    $this->materials = $param;
  }
}