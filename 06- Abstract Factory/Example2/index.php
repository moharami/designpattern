<?php

require_once __DIR__ . '/vendor/autoload.php';
use Amir\Abstract2\Page;
use Amir\Abstract2\PHPTemplateFactory;

$page = new Page('Sample page', 'This is the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PHPTemplateFactory());


// Uncomment the following if you have Twig installed.

// echo "Testing rendering with the Twig factory:\n"; echo $page->render(new
// TwigTemplateFactory());