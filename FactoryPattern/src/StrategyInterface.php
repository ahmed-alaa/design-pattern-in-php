<?php

declare(strict_types=1);

interface StrategyInterface
{
    /**
     * @return string
     */
    public function paint(): string;
}