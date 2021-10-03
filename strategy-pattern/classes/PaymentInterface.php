<?php
namespace Gorguner\DesignPatterns\StrategyPattern;

interface PaymentInterface {
    public function pay(int $amount);
}
