<?php

namespace AoHtml\Traits;

trait ColsTrait
{

    /**
     * @var string
     */
    protected $cols;

    /**
     * @param string $cols
     * @return $this
     */
    public function cols($cols)
    {
        $this->cols = $cols;
        return $this;
    }

}