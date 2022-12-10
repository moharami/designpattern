<?php


$b = new Burger();
$c = new Cheese($b); // passing burger
$pb = new Patty($b); // passing burger
$pc = new Patty($c); // passing cheese burger

$b->cost(); // 4        burger
$c->cost(); // 4.25     burger + cheese
$pb->cost(); // 5       burger + patty
$pc->cost(); // 5.25    burger + cheese  + patty
