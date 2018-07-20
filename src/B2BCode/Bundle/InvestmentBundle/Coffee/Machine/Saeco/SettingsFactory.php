<?php

namespace B2BCode\Bundle\InvestmentBundle\Coffee\Machine\Saeco;

use B2BCode\Bundle\InvestmentBundle\Coffee\Machine\CoffeeSettings;
use B2BCode\Bundle\InvestmentBundle\Coffee\Machine\Setting\MilkRatio;
use B2BCode\Bundle\InvestmentBundle\Coffee\Machine\Setting\Strength;
use B2BCode\Bundle\InvestmentBundle\Coffee\Machine\Setting\WaterRatio;
use B2BCode\Bundle\InvestmentBundle\Coffee\Machine\Setting\WaterTemperature;
use B2BCode\Bundle\InvestmentBundle\Coffee\Machine\SettingsFactoryInterface;
use B2BCode\Bundle\InvestmentBundle\Coffee\Type\Cappuccino;
use B2BCode\Bundle\InvestmentBundle\Coffee\Type\CoffeeTypeInterface;
use B2BCode\Bundle\InvestmentBundle\Coffee\Type\Espresso;

class SettingsFactory implements SettingsFactoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function prepareForType(CoffeeTypeInterface $coffeeType): CoffeeSettings
    {
        switch ((string)$coffeeType) {
            case Espresso::TYPE:
                return $this->prepareForEspresso();
                break;
            case Cappuccino::TYPE:
                return $this->prepareForCappucino();
                break;
            default:
                // todo exception;
        }
    }

    /**
     * @return CoffeeSettings
     */
    private function prepareForEspresso(): CoffeeSettings
    {
        $settings = new CoffeeSettings();
        $settings
            ->addSetting(new WaterRatio(10))
            ->addSetting(new Strength(10))
            ->addSetting(new WaterTemperature(80));

        return $settings;
    }

    /**
     * @return CoffeeSettings
     */
    private function prepareForCappucino(): CoffeeSettings
    {
        $settings = new CoffeeSettings();
        $settings
            ->addSetting(new WaterRatio(30))
            ->addSetting(new Strength(6))
            ->addSetting(new WaterTemperature(70))
            ->addSetting(new MilkRatio(50));

        return $settings;
    }
}
