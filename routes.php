<?php
namespace store;
$return = [
    "#^Authorization$#" => ["Authorization", "render", []],
    "#^$#" => ["Page1", "render", []],
    "#^Registration$#" => ["Registration", "action", []],
    "#^Catalog$#" => ["Catalog", "action", []],
    "#^Catalog/(\d+)$#" => ["Catalog", "action", []],
    "#^PagePromo$#" => ["PagePromo", "action", []],
    "#^Promo/(\d+)$#" => ["Promo", "action", ["num" => 1]],
    "#^Cabinet$#" => ["Promo", "action", ["num" => 1]]
   /* "#^Pages1$#" => ["page", "index", []],
    "#^Pages1/(\d+)$#" => ["page", "index", ["num" => 1]]*/
   
];


