<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class CarPainterTest extends TestCase
{
    public function testCarPaintedWithRedColor()
    {
        $expectedOutput = 'red';
        $this->expectOutputString($expectedOutput);

        $myCar = new CarPainter();
        $myCar->paintMe(new RedStrategy());
    }

    public function testCarPaintedWithBlackColor()
    {
        $expectedOutput = 'black';
        $this->expectOutputString($expectedOutput);

        $myCar = new CarPainter();
        $myCar->paintMe(new BlackStrategy());
    }
}