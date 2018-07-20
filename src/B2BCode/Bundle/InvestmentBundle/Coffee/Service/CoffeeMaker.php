<?php

namespace B2BCode\Bundle\InvestmentBundle\Coffee\Service;

use B2BCode\Bundle\InvestmentBundle\Coffee\Entity\Coffee;
use B2BCode\Bundle\InvestmentBundle\Coffee\Exception\CoffeeTypeNotSupported;
use B2BCode\Bundle\InvestmentBundle\Coffee\Machine\CoffeeMachineInterface;
use B2BCode\Bundle\InvestmentBundle\Coffee\Machine\SettingsFactoryInterface;
use B2BCode\Bundle\InvestmentBundle\Coffee\Type\CoffeeTypeInterface;

class CoffeeMaker
{
    /**
     * @var CoffeeMachineInterface
     */
    private $coffeeMachine;

    /**
     * @var SettingsFactoryInterface
     */
    private $settingsFactory;

    /**
     * @param CoffeeMachineInterface   $coffeeMachine
     * @param SettingsFactoryInterface $settingsFactory
     */
    public function __construct(CoffeeMachineInterface $coffeeMachine, SettingsFactoryInterface $settingsFactory)
    {
        $this->coffeeMachine = $coffeeMachine;
        $this->settingsFactory = $settingsFactory;
    }

    /**
     * @param CoffeeTypeInterface $coffeeType
     * @throws CoffeeTypeNotSupported
     * @return Coffee
     */
    public function makeCoffee(CoffeeTypeInterface $coffeeType): Coffee
    {
        $settings = $this->settingsFactory->prepareForType($coffeeType);

        return $this->coffeeMachine->makeCoffee($coffeeType, $settings);
    }
}
