<?php

namespace AoHtml\Traits;

trait NameTrait
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