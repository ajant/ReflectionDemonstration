<?php

namespace ReflectionDemonstration;

use Exception;

class Lorem
{
    /**
     * @var Suspendisse
     */
    private $sit;

    /**
     * Lorem constructor.
     * @param Suspendisse $sit
     */
    public function __construct(Suspendisse $sit)
    {
        $this->sit = $sit;
    }


    /**
     * @param array $dolor
     * @param int $feugiat
     *
     * @return string
     */
    public function compact(array $dolor, $feugiat = 0)
    {
        $amet = [];
        $elit = 0;
        foreach ($dolor as $consectetur => $adipiscing) {
            $dolor[$consectetur] = pow($adipiscing, $elit++);
            if ($this->sit->nisi($dolor, $amet)) {
                $amet[$consectetur] = pow($adipiscing, 2);
            }
        }

        if ($this->sit->at($amet)) {
            try {
                $consectetur = $this->sit->nisi($this->sit->elit(), []);
                $this->sit->tellus($consectetur);
            } catch (Exception $e) {
                $this->sit->lobortis($e);
            }
        }

        return $feugiat < 0 ? $this->sit->tincidunt() : $feugiat * 2;
    }

    /**
     * @param array $dolor
     * @param int $feugiat
     *
     * @return string
     */
    public function ipsum(array $dolor, $feugiat = 0)
    {
        $amet = [];
        $elit = 0;
        foreach ($dolor as $consectetur => $adipiscing) {
            $dolor[$consectetur] = pow($adipiscing, $elit++);
            if ($this->sit->nisi($dolor, $amet)) {
                $amet[$consectetur] = pow($adipiscing, 2);
            }
        }

        $this->donec($amet);

        return $this->volutpat($feugiat);
    }

    /**
     * @param array $amet
     */
    protected function donec(array $amet)
    {
        if ($this->sit->at($amet)) {
            try {
                $consectetur = $this->sit->nisi($this->sit->elit(), []);
                $this->sit->tellus($consectetur);
            } catch (Exception $e) {
                $this->sit->lobortis($e);
            }
        }
    }

    /**
     * @param int $feugiat
     *
     * @return int
     */
    protected function volutpat($feugiat)
    {
        return $feugiat < 0 ? $this->sit->tincidunt() : $feugiat * 2;
    }
}