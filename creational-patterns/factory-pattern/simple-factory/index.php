<?php

spl_autoload_register(function($className) {
    $file = 'classes/'. $className . '.php';
    if (file_exists($file)) {
        include $file;
    }
});


CustomerFactory::getCustomer(1);
CustomerFactory::getCustomer(2);

echo "\n\n";

