<?php

spl_autoload_register(function($className) {
    $file = './classes/'. str_replace('\\', '/', $className) . '.php';
    if (file_exists($file)) {
        include $file;
    }
});

$sc = new ShoppingCart();
$sc->pay(new CreditCardPayment());
echo "\n\n";
$sc->pay(new PaypalPayment());

