<?php

namespace AoHtml\Traits;

trait ClassTrait
{

    /**
     * @var string
     */
    protected $classes;

    /**
     * @param string $classes
     * @return $this
     */
    public function classes($classes)
    {
        $this->classes = $classes;
        return $this;
    }

}