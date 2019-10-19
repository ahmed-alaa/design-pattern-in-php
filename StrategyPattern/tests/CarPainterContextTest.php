<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class CarPainterContextTest extends TestCase
{
    public function testCarPaintedWithRedColor()
    {
        $expectedOutput = 'red';
        $this->expectOutputString($expectedOutput);

        $myCar = new CarPainterContext();
        $myCar->paintMe($expectedOutput);
    }

    public function testCarPaintedWithBlackColor()
    {
        $expectedOutput = 'black';
        $this->expectOutputString($expectedOutput);

        $myCar = new CarPainterContext();
        $myCar->paintMe($expectedOutput);
    }

    public function testCarPaintedWithDefaultColor()
    {
        $expectedOutput = 'red';
        $this->expectOutputString($expectedOutput);

        $myCar = new CarPainterContext();
        $myCar->paintMe('default');
    }
}