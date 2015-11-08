<?php

namespace AoHtml\Traits;

trait AttrNameTrait
{

    /**
     * @var string
     */
    protected $name;

    /**
     * @param string $name
     * @return $this
     */
    public function name($name)
    {
        $this->name = $name;
        return $this;
    }

}