<?php

namespace AoHtml\Traits;

trait OffsetTrait
{

    /**
     * @var string
     */
    protected $offset;

    /**
     * @param string $offset
     * @return $this
     */
    public function offset($offset)
    {
        $this->offset = $offset;
        return $this;
    }

}