<?php

use ReflectionDemonstration\Lorem;
use ReflectionDemonstration\Suspendisse;

class DonecTest extends PHPUnit_Framework_TestCase
{
    public function testDonec()
    {
        // Arrange
        $amet = [];
        $elit = [];
        $consectetur = 1;

        $prophetSit = $this->prophesize(Suspendisse::class);
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

        $reflection = new ReflectionClass($lorem);
        $reflectionMethod = $reflection->getMethod('donec');
        $reflectionMethod->setAccessible(true);

        // Act
        $reflectionMethod->invoke($lorem, $amet);
    }

    public function testDonecException()
    {
        // Arrange
        $amet = [];
        $consectetur = 1;

        $prophetSit = $this->prophesize(Suspendisse::class);
        $prophetSit->at($amet)
            ->shouldBeCalled()
            ->willReturn(true);
        $exception = new Exception('foobar');
        $prophetSit->elit()
            ->shouldBeCalled()
            ->willTHrow($exception);
        $prophetSit->lobortis($consectetur)
            ->shouldBeCalled();

        $lorem = new Lorem($prophetSit->reveal());

        $reflection = new ReflectionClass($lorem);
        $reflectionMethod = $reflection->getMethod('donec');
        $reflectionMethod->setAccessible(true);

        // Act
        $reflectionMethod->invoke($lorem, $amet);
    }
}
