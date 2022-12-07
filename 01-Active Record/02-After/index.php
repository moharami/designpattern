<?php


require 'User.php';

$user = new User();
$user->load(2);

echo '<pre>';
print_r($user);
echo '<pre>';
print_r($user->company);

