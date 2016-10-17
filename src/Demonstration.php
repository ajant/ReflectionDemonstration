<?php

namespace ReflectionDemonstration;

class Demonstration
{
    /**
     * @var int
     */
    private static $privateProperty;

    /**
     * @var int
     */
    protected $protectedProperty;

    /**
     * @var int
     */
    protected $publicProperty;

    /**
     * Demonstration constructor.
     */
    public function __construct()
    {
        self::$privateProperty = 1;
        $this->protectedProperty = 2;
        $this->publicProperty = 3;
    }

    /**
     * @return int
     */
    private function privateMethod()
    {
        return 11;
    }

    /**
     * @return int
     */
    protected static function protectedMethod()
    {
        return 22;
    }

    /**
     * @return int
     */
    protected function publicMethod()
    {
        return 22;
    }

    /**
     * @return int
     */
    public function neatTrick()
    {
        $newInstance = new Demonstration();

        return $newInstance->privateMethod()
            + self::protectedMethod()
            + self::$privateProperty
            + $newInstance->protectedProperty;
    }
}