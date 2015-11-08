<?php

namespace AoHtml\Traits;

trait AttrOptionsTrait
{

    /**
     * @var array
     */
    protected $options;

    /**
     * @param array $options
     * @return $this
     */
    public function options(array $options)
    {
        $this->options = $options;
        return $this;
    }

}