<?php

namespace B2BCode\Bundle\InvestmentBundle\Coffee\Machine;

use B2BCode\Bundle\InvestmentBundle\Coffee\Entity\Coffee;
use B2BCode\Bundle\InvestmentBundle\Coffee\Exception\CoffeeTypeNotSupported;
use B2BCode\Bundle\InvestmentBundle\Coffee\Type\CoffeeTypeInterface;

interface CoffeeMachineInterface
{
    /**
     * @param CoffeeTypeInterface $coffeeType
     * @return bool
     */
    public function supportsType(CoffeeTypeInterface $coffeeType): bool;

    /**
     * @param CoffeeTypeInterface $coffeeType
     * @param CoffeeSettings      $coffeeSettings
     *
     * @throws CoffeeTypeNotSupported
     * @return Coffee
     */
    public function makeCoffee(CoffeeTypeInterface $coffeeType, CoffeeSettings $coffeeSettings): Coffee;
}
