<?php

class PayPalPayment implements PaymentInterface {
    public function pay($amount) {
        echo $amount. " paid using Paypal.";
    }
}
