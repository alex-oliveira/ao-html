<?php

namespace AoHtml\Traits;

trait MethodTrait
{

    /**
     * @var integer
     */
    protected $method;

    /**
     * @param integer $method
     * @return $this
     */
    public function method($method)
    {
        $this->method = $method;
        return $this;
    }

}