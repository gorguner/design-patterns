<?php

class SilverCustomerFactory extends CustomerFactory {
    public function createCustomer() : CustomerInterface {
        $customer = new SilverCustomer();
        return $customer;
    }
}
