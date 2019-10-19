<?php

declare(strict_types=1);

require_once 'StrategyInterface.php';

class RedStrategy implements StrategyInterface
{
    /**
     * @return string
     */
    public function paint(): string
    {
        return 'red';
    }
}