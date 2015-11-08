<?php

namespace AoHtml\Traits;

trait AttrValueTrait
{

    /**
     * @var string
     */
    protected $value;

    /**
     * @param string $value
     * @return $this
     */
    public function value($value)
    {
        $this->value = $value;
        return $this;
    }

}