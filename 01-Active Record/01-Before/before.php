<?php

include_once 'user.php';

$connection = new PDO("mysql:host=localhost;dbname=designpattern", 'root', '');

$sql = 'SELECT * FROM users WHERE id = 2';

$result = $connection->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);

$user = new User();
$user->id = $row['id'];
$user->first_name = $row['first_name'];
$user->last_name = $row['last_name'];
$user->company = $row['company'];
$user->email = $row['email'];

echo '<pre>';
print_r($user);
