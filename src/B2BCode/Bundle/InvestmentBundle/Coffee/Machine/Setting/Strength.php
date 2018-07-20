<?php

namespace B2BCode\Bundle\InvestmentBundle\Coffee\Machine\Setting;

class Strength implements SettingInterface
{
    /**
     * @param int $strength :: MIN 1 - MAX 10
     */
    public function __construct(int $strength)
    {
    }
}
