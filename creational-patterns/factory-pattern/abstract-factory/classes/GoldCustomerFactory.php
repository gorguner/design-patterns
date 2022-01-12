<?php

class GoldCustomerFactory extends CustomerFactory {
    public function createCustomer() : CustomerInterface {
        $customer = new GoldCustomer();
        $customer->goldOperation();
        return $customer;
    }
}
