<?php

namespace AoHtml\Traits;

trait TooltipTrait
{

    /**
     * @var bool
     */
    protected $tooltip = '';

    /**
     * @param string $tooltip
     * @return $this
     */
    public function tooltip($tooltip = 'top')
    {
        $this->tooltip = $tooltip;
        return $this;
    }

}