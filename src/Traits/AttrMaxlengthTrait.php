<?php

namespace AoHtml\Traits;

trait AttrMaxlengthTrait
{

    /**
     * @var integer
     */
    protected $maxlength;

    /**
     * @param integer $maxlength
     * @return $this
     */
    public function maxlength($maxlength)
    {
        $this->maxlength = $maxlength;
        return $this;
    }

}