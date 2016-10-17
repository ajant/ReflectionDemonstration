<?php

use ReflectionDemonstration\Lorem;
use ReflectionDemonstration\Suspendisse;

class IpsumTest extends PHPUnit_Framework_TestCase
{
    public function testIpsum()
    {
        // Arrange
        $dolor = [0, 1];
        $dolorEdited = [1, 1];
        $amet0 = [];
        $amet1 = [0];
        $amet = [0, 1];

        $prophetSit = $this->prophesize(Suspendisse::class);
        $prophetSit->nisi($dolorEdited, $amet0)
            ->shouldBeCalled()
            ->willReturn(true);
        $prophetSit->nisi($dolorEdited, $amet1)
            ->shouldBeCalled()
            ->willReturn(true);
        $prophetSit->at($amet)
            ->shouldBeCalled()
            ->willReturn(false);

        $lorem = new Lorem($prophetSit->reveal());

        // Act
        $lorem->ipsum($dolor);
    }
}
