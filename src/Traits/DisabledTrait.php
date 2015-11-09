<?php

namespace AoHtml\Traits;

trait DisabledTrait
{

    /**
     * @var bool
     */
    protected $disabled = false;

    /**
     * @param bool|true $disabled
     * @return $this
     */
    public function disabled($disabled = true)
    {
        $this->disabled = $disabled;
        return $this;
    }

}