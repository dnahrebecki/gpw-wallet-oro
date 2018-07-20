<?php

namespace B2BCode\Bundle\InvestmentBundle\Coffee\Machine\Setting;

class WaterRatio implements SettingInterface
{
    /**
     * @param int $ratio :: MIN 10 - MAX 50
     */
    public function __construct(int $ratio)
    {
    }

}
