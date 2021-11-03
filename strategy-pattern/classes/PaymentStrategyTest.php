<?php
namespace Gorguner\DesignPatterns\StrategyPattern;


class PaymentStrategyTest{

    private $amount;

    public function __construct($amount) {
        $this->amount = $amount;
    }

    public function payAmount() {
        if ($this->amount > 500) {
            $payment = new CCPaymentStrategy();
        } else {
            $payment = new PayPal();
        }
        $payment->pay($this->amount);
    }

}
