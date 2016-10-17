<?php

use ReflectionDemonstration\Lorem;
use ReflectionDemonstration\Suspendisse;

class IpsumCompleteTest extends PHPUnit_Framework_TestCase
{
    public function testVolutpatSiMple()
    {
        // Arrange
        $feugiat = 1;
        $expected = 2;

        $prophetSit = $this->prophesize(Suspendisse::class);

        $lorem = new Lorem($prophetSit->reveal());

        $reflection = new ReflectionClass($lorem);
        $reflectionMethod = $reflection->getMethod('volutpat');
        $reflectionMethod->setAccessible(true);

        // Act
        $result = $reflectionMethod->invoke($lorem, $feugiat);

        // Assert
        $this->assertEquals($expected, $result);
    }

    public function testVolutpat()
    {
        // Arrange
        $feugiat = -1;
        $expected = -1;

        $prophetSit = $this->prophesize(Suspendisse::class);
        $prophetSit->tincidunt()
            ->shouldBeCalled()
            ->willReturn($expected);

        $lorem = new Lorem($prophetSit->reveal());

        $reflection = new ReflectionClass($lorem);
        $reflectionMethod = $reflection->getMethod('volutpat');
        $reflectionMethod->setAccessible(true);

        // Act
        $result = $reflectionMethod->invoke($lorem, $feugiat);

        // Assert
        $this->assertEquals($expected, $result);
    }
}
