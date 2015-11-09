<?php

namespace AoHtml\Traits;

trait MinTrait
{

    /**
     * @var string
     */
    protected $min;

    /**
     * @param string $min
     * @return $this
     */
    public function min($min)
    {
        $this->min = $min;
        return $this;
    }

}