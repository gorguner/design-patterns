<?php

spl_autoload_register(function($className) {
    $file = 'classes/'. $className . '.php';
    if (file_exists($file)) {
        include $file;
    }
});

$factory = new GoldCustomerFactory();
$customer = $factory->getCustomer();

$factory = new SilverCustomerFactory();
$customer = $factory->getCustomer();

echo "\n\n";

