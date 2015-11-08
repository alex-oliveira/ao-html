<?php

namespace AoHtml\Traits;

trait TagActiveTrait
{

    /**
     * @var bool
     */
    protected $active = false;

    /**
     * @param bool|true $active
     * @return $this
     */
    public function active($active = true)
    {
        $this->active = $active;
        return $this;
    }

}