<?php

class SilverCustomer implements CustomerInterface {

    public function addPoints() {
        echo "Silver points added.\n";
    }

    public function addDiscount() {
        echo "Silver discount added.\n";
    }
}
