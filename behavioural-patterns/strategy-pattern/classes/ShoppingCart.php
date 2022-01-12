<?php

class ShoppingCart {

    public function getAmount() : int  {
        return 100;
    }
    public function pay(PaymentInterface $paymentMethod) {
        $paymentMethod->pay($this->getAmount());
    }
}
