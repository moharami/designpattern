<?php

include_once 'CoinmarketcapAdapter.php';


$bitcoinPriceAdapter = new CoinmarketcapAdapter('key');
$price = $bitcoinPriceAdapter->fetchPrice();

print_r($price);