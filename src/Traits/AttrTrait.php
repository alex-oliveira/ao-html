<?php

namespace AoHtml\Traits;

trait AttrTrait
{

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->{$name};
        }
        return null;
    }

    public function __toString()
    {
        return (string)$this->open();
    }

}