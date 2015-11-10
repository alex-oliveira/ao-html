<?php

namespace AoHtml\Html;

use AoHtml\Traits\HrefTrait;
use AoHtml\Traits\IconTrait;
use AoHtml\Traits\LabelTrait;
use AoHtml\Traits\TitleTrait;
use AoHtml\Traits\TagTrait;
use AoHtml\Traits\ActiveTrait;

class Tab
{

    protected $tag = 'tab';

    use TagTrait,
        HrefTrait,
        LabelTrait,
        IconTrait,
        TitleTrait,
        ActiveTrait;

    //------------------------------------------------------------------------------------------------------------------
    // CONSTRUCT
    //------------------------------------------------------------------------------------------------------------------

    public function __construct($label = null, $href = null, $active = false)
    {
        $this->label($label)->title($label)->href($href)->active($active);
    }

}
