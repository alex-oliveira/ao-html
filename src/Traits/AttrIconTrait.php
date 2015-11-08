<?php

namespace AoHtml\Traits;

trait AttrIconTrait
{

    /**
     * @var string
     */
    protected $icon;

    /**
     * @param string $icon
     * @return $this
     */
    public function icon($icon)
    {
        $this->icon = $icon;
        return $this;
    }

}