<?php

namespace B2BCode\Bundle\InvestmentBundle\Tests\Coffee\Service;

use B2BCode\Bundle\InvestmentBundle\Coffee\Machine\Saeco\SaecoIncanto;
use B2BCode\Bundle\InvestmentBundle\Coffee\Machine\Saeco\SettingsFactory;
use B2BCode\Bundle\InvestmentBundle\Coffee\Service\CoffeeMaker;
use B2BCode\Bundle\InvestmentBundle\Coffee\Type\Espresso;
use PHPUnit\Framework\TestCase;

class CoffeeMakerTest extends TestCase
{
    public function testEspresso()
    {
        $coffeeMaker = new CoffeeMaker(new SaecoIncanto(), new SettingsFactory());

        $coffeeMaker->makeCoffee(new Espresso());
    }
}
