<?php
namespace Gorguner\DesignPatterns\StrategyPattern;

class CCPayment implements PaymentInterface {
    public function pay($amount) {
        echo "content for CCPayment". $amount;
    }
}
