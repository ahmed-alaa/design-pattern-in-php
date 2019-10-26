<?php

declare(strict_types=1);

require_once 'PainterStrategyFactory.php';

/**
 * This example can be used if an argument is passed
 * and you need to select a strategy according to this input
 */
final class CarPainterContext
{
    /**
     * @var StrategyInterface
     */
    private $strategy;

    public function paintMe(string $color)
    {
        $this->setStrategy($color);
        $this->applyStrategy();
    }

    private function setStrategy(string $color): void
    {
        $this->strategy = PainterStrategyFactory::create($color);
    }

    private function applyStrategy(): void
    {
        (new CarPainter())->paintMe($this->strategy);
    }
}