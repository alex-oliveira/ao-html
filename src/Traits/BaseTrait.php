<?php

namespace AoHtml\Traits;

trait BaseTrait
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
        return (string)$this->begin();
    }

    public function begin()
    {
        return view('ao-html::' . $this->tag, ['tag' => $this]);
    }

}