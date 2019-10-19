<?php

declare(strict_types=1);

require_once 'StrategyInterface.php';
require_once 'RedStrategy.php';
require_once 'BlackStrategy.php';

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
        $this->processStrategy();
    }

    private function setStrategy(string $color): void
    {
        switch ($color) {
            case 'red':
                $this->strategy = new RedStrategy();
                break;
            case 'black':
                $this->strategy = new BlackStrategy();
                break;
            default:
                $this->strategy = new RedStrategy();
                break;
        }
    }

    private function processStrategy(): void
    {
        echo $this->strategy->paint();
    }
}