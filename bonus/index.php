<?php

include_once __DIR__ . '/app/PetFood.php';
include_once __DIR__ . '/app/PetGame.php';
include_once __DIR__ . '/app/PetKennel.php';

include_once __DIR__ . '/app/Order.php';

$crocchette = new PetFood(
  [
    'cover' => 'https://arcaplanet.vtexassets.com/arquivos/ids/224338-1600-auto?v=637454741671700000&width=1600&height=auto&aspect=true',
    'name' => 'Virtus Dog Adult Rustic',
    'brand' => 'Virtus',
    'price' => 54.90,
    'shipping_weight' => 8,
    'weight' => 7.5,
    'ingredients' => ['tacchino', 'maiale', 'patate']
  ]
);

$kong = new PetGame(
  [
    'cover' => 'https://arcaplanet.vtexassets.com/arquivos/ids/256385-1200-auto?v=637569310508770000&width=1200&height=auto&aspect=true',
    'name' => 'KONG King Classic',
    'brand' => 'Kong',
    'price' => 35.90,
    'shipping_weight' => 0.6,
    'size' => 'xxl',
    'material' => 'caucciù'
  ]
);

$cuscino = new PetKennel(
  [
    'cover' => 'https://arcaplanet.vtexassets.com/arquivos/ids/264195-1200-auto?v=637707644239200000&width=1200&height=auto&aspect=true',
    'name' => 'Cuscino Nautica',
    'brand' => 'Croci',
    'price' => 34.99,
    'shipping_weight' => 0.3,
    'size' => 105,
    'materials' => ['cotone']
  ]
);

$order = new Order(
  [
    'name' => 'Mario Rossi',
    'address' => '4583 Better Street'
  ]
);

$order->addToCart($crocchette, 1);
$order->addToCart($kong, 3);
$order->addToCart($cuscino, 2);

var_dump($order->cart);
var_dump($order->get_tot_price());