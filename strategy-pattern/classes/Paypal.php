<?php
namespace Gorguner\DesignPatterns\StrategyPattern;

class PayPal implements PaymentInterface {
    public function pay($amount) {
        echo "content for PayPal". $amount;;
    }
}
