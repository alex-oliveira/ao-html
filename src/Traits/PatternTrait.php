<?php

namespace AoHtml\Traits;

trait PatternTrait
{

    /**
     * @var string
     */
    protected $pattern;

    /**
     * @param string $pattern
     * @return $this
     */
    public function pattern($pattern)
    {
        $this->pattern = $pattern;
        return $this;
    }

}