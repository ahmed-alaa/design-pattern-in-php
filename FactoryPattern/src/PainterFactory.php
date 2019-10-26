<?php

require_once 'PainterFactoryInterface.php';
require_once 'StrategyInterface.php';
require_once 'RedStrategy.php';
require_once 'BlackStrategy.php';

class PainterFactory implements PainterFactoryInterface
{
    /**
     * @param string $color
     * @return StrategyInterface
     */
    public static function create(string $color): StrategyInterface
    {
        switch ($color) {
            case 'red':
                $strategy = new RedStrategy();
                break;
            case 'black':
                $strategy = new BlackStrategy();
                break;
            default:
                $strategy = new RedStrategy();
                break;
        }

        return $strategy;
    }
}