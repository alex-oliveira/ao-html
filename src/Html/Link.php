<?php

namespace AoHtml\Html;

use AoHtml\Traits\HrefTrait;
use AoHtml\Traits\IconTrait;
use AoHtml\Traits\TagTrait;
use AoHtml\Traits\LabelTrait;
use AoHtml\Traits\TitleTrait;
use AoHtml\Traits\DisabledTrait;
use AoHtml\Traits\TooltipTrait;

class Link
{

    protected $tag = 'a';

    use TagTrait,
        HrefTrait,
        LabelTrait,
        TitleTrait,
        IconTrait,
        TooltipTrait,
        DisabledTrait;

    //------------------------------------------------------------------------------------------------------------------
    // CONSTRUCT
    //------------------------------------------------------------------------------------------------------------------

    public function __construct($label = null, $href = '#')
    {
        $this->label($label)->title($label)->href($href);
    }

}
