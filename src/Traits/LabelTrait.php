<?php

namespace AoHtml\Traits;

trait LabelTrait
{

    /**
     * @var string
     */
    protected $label;

    /**
     * @param string $label
     * @return $this
     */
    public function label($label)
    {
        $this->label = $label;
        return $this;
    }

}