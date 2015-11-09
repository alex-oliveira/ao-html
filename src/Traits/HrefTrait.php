<?php

namespace AoHtml\Traits;

trait HrefTrait
{

    /**
     * @var string
     */
    protected $href;

    /**
     * @param string $href
     * @return $this
     */
    public function href($href)
    {
        $this->href = $href;
        return $this;
    }

}