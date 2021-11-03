<?php

class CreditCardPayment implements PaymentInterface {

    public function pay(int $amount) {
        echo "Paying with cc card number amount: ". $amount;
    }
}
