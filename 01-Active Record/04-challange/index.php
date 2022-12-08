<?php

include 'vendor/autoload.php';
include_once 'posts.php';
$parameters = array('id' => null, 'title' => 'Sample Title', 'body' => 'This is the body', 'create_at' => '2022-01-27');

$result = Post::create($parameters);

echo '</pre>';
print_r($result);
