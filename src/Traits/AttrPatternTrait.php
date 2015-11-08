<?php

namespace AoHtml\Traits;

trait AttrPatternTrait
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