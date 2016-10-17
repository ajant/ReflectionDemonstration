<?php

use ReflectionDemonstration\Lorem;
use ReflectionDemonstration\Suspendisse;

class IpsumCompleteTest extends PHPUnit_Framework_TestCase
{
    public function testComplete()
    {
        // Arrange
        $dolor = [0, 1];
        $dolorEdited = [1, 1];
        $amet0 = [];
        $amet1 = [0];
        $amet = [0, 1];
        $feugiat = 1;
        $expected = 2;
        $consectetur = 1;
        $elit = [];

        $prophetSit = $this->prophesize(Suspendisse::class);
        $prophetSit->nisi($dolorEdited, $amet0)
            ->shouldBeCalled()
            ->willReturn(true);
        $prophetSit->nisi($dolorEdited, $amet1)
            ->shouldBeCalled()
            ->willReturn(true);
        $prophetSit->at($amet)
            ->shouldBeCalled()
            ->willReturn(true);
        $prophetSit->elit()
            ->shouldBeCalled()
            ->willReturn($elit);
        $prophetSit->nisi($elit, [])
            ->shouldBeCalled()
            ->willReturn($consectetur);
        $prophetSit->tellus($consectetur)
            ->shouldBeCalled();

        $lorem = new Lorem($prophetSit->reveal());

        // Act
        $result = $lorem->ipsum($dolor, $feugiat);

        // Assert
        $this->assertEquals($expected, $result);
    }

    public function testSkip()
    {
        // Arrange
        $dolor = [];
        $feugiat = -1;
        $expected = 2;
        $consectetur = 1;

        $prophetSit = $this->prophesize(Suspendisse::class);
        $prophetSit->at([])
            ->shouldBeCalled()
            ->willReturn(true);
        $exception = new Exception('foobar');
        $prophetSit->elit()
            ->shouldBeCalled()
            ->willTHrow($exception);
        $prophetSit->tincidunt()
            ->shouldBeCalled()
            ->willReturn($expected);
        $prophetSit->lobortis($consectetur)
            ->shouldBeCalled();

        $lorem = new Lorem($prophetSit->reveal());

        // Act
        $result = $lorem->ipsum($dolor, $feugiat);

        // Assert
        $this->assertEquals($expected, $result);
    }
}
