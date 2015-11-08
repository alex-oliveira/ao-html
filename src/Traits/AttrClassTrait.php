<?php

namespace AoHtml\Traits;

trait AttrClassTrait
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