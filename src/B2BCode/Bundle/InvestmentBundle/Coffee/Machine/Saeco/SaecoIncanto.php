<?php

namespace B2BCode\Bundle\InvestmentBundle\Coffee\Machine\Saeco;

use B2BCode\Bundle\InvestmentBundle\Coffee\Entity\Coffee;
use B2BCode\Bundle\InvestmentBundle\Coffee\Exception\CoffeeTypeNotSupported;
use B2BCode\Bundle\InvestmentBundle\Coffee\Machine\CoffeeMachineInterface;
use B2BCode\Bundle\InvestmentBundle\Coffee\Machine\CoffeeSettings;
use B2BCode\Bundle\InvestmentBundle\Coffee\Type\CoffeeTypeInterface;

class SaecoIncanto implements CoffeeMachineInterface
{
    /**
     * {@inheritdoc}
     */
    public function supportsType(CoffeeTypeInterface $coffeeType): bool
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function makeCoffee(CoffeeTypeInterface $coffeeType, CoffeeSettings $coffeeSettings): Coffee
    {
        if (!$this->supportsType($coffeeType)) {
            throw CoffeeTypeNotSupported::fromCoffeeMachine($this);
        }

        // @todo resolve settings, etc.

        return new Coffee($coffeeType);
    }
}
