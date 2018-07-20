<?php

namespace B2BCode\Bundle\InvestmentBundle\Coffee\Machine;

use B2BCode\Bundle\InvestmentBundle\Coffee\Type\CoffeeTypeInterface;

interface SettingsFactoryInterface
{
    /**
     * @param CoffeeTypeInterface $coffeeType
     * @return CoffeeSettings
     */
    public function prepareForType(CoffeeTypeInterface $coffeeType): CoffeeSettings;
}
