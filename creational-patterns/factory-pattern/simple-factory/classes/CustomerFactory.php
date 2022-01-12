<?php

class CustomerFactory {

    static public  function getCustomer(int $i) : CustomerInterface{
        switch($i) {
            case 1:
                $customer = new GoldCustomer();
                $customer->addPoints();
                $customer->addDiscount();
                break;
            case 2:
                $customer = new SilverCustomer();
                $customer->addPoints();
                $customer->addDiscount();
                break;
        }
        return $customer;
    }
}
