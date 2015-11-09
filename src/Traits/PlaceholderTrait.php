<?php

namespace AoHtml\Traits;

trait PlaceholderTrait
{

    /**
     * @var string
     */
    protected $placeholder;

    /**
     * @param string $placeholder
     * @return $this
     */
    public function placeholder($placeholder)
    {
        $this->placeholder = $placeholder;
        return $this;
    }

}