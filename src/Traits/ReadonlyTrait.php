<?php

namespace AoHtml\Traits;

trait ReadonlyTrait
{

    /**
     * @var bool
     */
    protected $readonly = false;

    /**
     * @param bool|true $readonly
     * @return $this
     */
    public function readonly($readonly = true)
    {
        $this->readonly = $readonly;
        return $this;
    }

}