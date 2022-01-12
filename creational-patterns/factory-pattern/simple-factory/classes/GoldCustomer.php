<?php

class GoldCustomer implements CustomerInterface {

    public function addPoints() {
        echo "Gold points added.\n";
    }

    public function addDiscount() {
        echo "Gold discount added.\n";
    }
}
