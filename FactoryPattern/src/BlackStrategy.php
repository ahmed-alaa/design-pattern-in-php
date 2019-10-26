<?php

declare(strict_types=1);

require_once 'StrategyInterface.php';

final class BlackStrategy implements StrategyInterface
{
    /**
     * @return string
     */
    public function paint(): string
    {
        return 'black';
    }
}