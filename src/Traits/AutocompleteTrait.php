<?php

namespace AoHtml\Traits;

trait AutocompleteTrait
{

    /**
     * @var bool
     */
    protected $autocomplete = false;

    /**
     * @param bool|true $status
     * @return $this
     */
    public function autocomplete($status = true)
    {
        $this->autocomplete = $status;
        return $this;
    }

}