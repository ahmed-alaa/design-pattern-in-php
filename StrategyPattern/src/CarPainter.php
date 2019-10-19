<?php

declare(strict_types=1);

require_once 'StrategyInterface.php';
require_once 'RedStrategy.php';
require_once 'BlackStrategy.php';

/**
 * This example can be used in case you can
 * specify which strategy to use
 */

final class CarPainter
{
    public function paintMe(StrategyInterface $color)
    {
        echo $color->paint();
    }
}