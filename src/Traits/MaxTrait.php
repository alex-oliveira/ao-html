<?php

namespace AoHtml\Traits;

trait MaxTrait
{

    /**
     * @var string
     */
    protected $max;

    /**
     * @param string $max
     * @return $this
     */
    public function max($max)
    {
        $this->max = $max;
        return $this;
    }

}