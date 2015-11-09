<?php

namespace AoHtml\Traits;

trait TypeTrait
{

    /**
     * @var string
     */
    protected $type;

    /**
     * @param string $type
     * @return $this
     */
    public function type($type)
    {
        $this->type = $type;
        return $this;
    }

}