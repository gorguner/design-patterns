<?php
namespace Gorguner\DesignPatterns\StrategyPattern;


spl_autoload_register(function($className) {
    $file = 'classes/'. $className . '.php';
    if (file_exists($file)) {
        include $file;
    }
});

$amount=50;

(new PaymentStrategy($amount))->payAmount();

echo "\n\n";

