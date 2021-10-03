<?php
namespace Gorguner\DesignPatterns\StrategyPattern;


class PaymentStrategy{

    private $amount;

    public function __construct($amount) {
        $this->amount = $amount;
    }

    public function payAmount() {
        if ($this->amount > 500) {
            $payment = new CCPayment();
        } else {
            $payment = new PayPal();
        }
        $payment->pay($this->amount);
    }

}
