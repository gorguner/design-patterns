<?php

abstract class CustomerFactory {


    public function getCustomer() : CustomerInterface{
        $customer = $this->createCustomer();
        $customer->addPoints();
        $customer->addDiscount();

        return $customer;
    }
    abstract public function createCustomer() : CustomerInterface;

}
