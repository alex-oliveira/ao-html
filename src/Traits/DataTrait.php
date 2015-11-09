<?php

namespace AoHtml\Traits;

trait DataTrait
{

    /**
     * @var array
     */
    protected $data;

    /**
     * @param string $name
     * @param mixed $value
     * @return $this
     */
    public function data($name, $value)
    {
        $this->data[$name] = $value;
        return $this;
    }

}