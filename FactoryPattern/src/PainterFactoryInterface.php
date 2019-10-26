<?php

require_once 'PainterFactoryInterface.php';

interface PainterFactoryInterface
{
    /**
     * @param string $color
     * @return StrategyInterface
     */
    public static function create(string $color): StrategyInterface;
}