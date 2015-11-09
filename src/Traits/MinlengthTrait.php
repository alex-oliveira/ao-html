<?php

namespace AoHtml\Traits;

trait MinlengthTrait
{

    /**
     * @var integer
     */
    protected $minlength;

    /**
     * @param integer $minlength
     * @return $this
     */
    public function minlength($minlength)
    {
        $this->minlength = $minlength;
        return $this;
    }

}