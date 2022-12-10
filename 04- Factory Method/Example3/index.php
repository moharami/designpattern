<?php
require_once 'vendor/autoload.php';

$planFactory = new \App\Plans\PlanFactory();

$plan = $planFactory->createPlan();
var_dump($plan);

