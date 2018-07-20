<?php

namespace B2BCode\Bundle\InvestmentBundle\Coffee\Entity;

use B2BCode\Bundle\InvestmentBundle\Coffee\Type\CoffeeTypeInterface;

class Coffee
{
    public function __construct(CoffeeTypeInterface $coffeeType)
    {
    }
}
