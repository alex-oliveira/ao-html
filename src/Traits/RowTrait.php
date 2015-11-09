<?php

namespace AoHtml\Traits;

trait RowTrait
{

    /**
     * @var bool
     */
    protected $row = false;

    /**
     * @param bool|true $status
     * @return $this
     */
    public function row($status = true)
    {
        $this->row = $status;
        return $this;
    }

}