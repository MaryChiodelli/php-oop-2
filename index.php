<?php

include_once __DIR__ . '/app/PetFood.php';
include_once __DIR__ . '/app/PetGame.php';

$crocchette = new PetFood(
  [
    'cover' => 'https://arcaplanet.vtexassets.com/arquivos/ids/224338-1600-auto?v=637454741671700000&width=1600&height=auto&aspect=true',
    'name' => 'Virtus Dog Adult Rustic',
    'brand' => 'Virtus',
    'price' => 54.90
  ]
);

$kong = new PetGame(
  [
    'cover' => 'https://arcaplanet.vtexassets.com/arquivos/ids/256385-1200-auto?v=637569310508770000&width=1200&height=auto&aspect=true',
    'name' => 'KONG King Classic',
    'brand' => 'Kong',
    'price' => 35.90
  ]
);

var_dump($crocchette);
var_dump($kong);