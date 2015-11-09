<?php

namespace AoHtml\Traits;

trait ClosedTrait
{

    /**
     * @var bool
     */
    protected $closed = false;

    /**
     * @param bool|true $status
     * @return $this
     */
    public function closed($status = true)
    {
        $this->closed = $status;
        return $this;
    }

}