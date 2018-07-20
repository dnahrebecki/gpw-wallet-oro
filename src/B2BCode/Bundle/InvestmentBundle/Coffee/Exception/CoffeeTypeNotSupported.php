<?php

namespace B2BCode\Bundle\InvestmentBundle\Coffee\Exception;

use B2BCode\Bundle\InvestmentBundle\Coffee\Machine\CoffeeMachineInterface;

class CoffeeTypeNotSupported extends \RuntimeException
{
    /**
     * @param CoffeeMachineInterface $coffeeMachine
     * @return CoffeeTypeNotSupported
     */
    public static function fromCoffeeMachine(CoffeeMachineInterface $coffeeMachine): CoffeeTypeNotSupported
    {
        // @todo details
        return new static();
    }
}
