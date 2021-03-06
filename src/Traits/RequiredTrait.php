<?php

namespace AoHtml\Traits;

trait RequiredTrait
{

    /**
     * @var bool
     */
    protected $required = false;

    /**
     * @param bool|true $status
     * @return $this
     */
    public function required($status = true)
    {
        $this->required = $status;
        return $this;
    }

}