<?php

namespace AoHtml\Html;

use AoHtml\Traits\AttrHrefTrait;
use AoHtml\Traits\AttrIconTrait;
use AoHtml\Traits\AttrIdTrait;
use AoHtml\Traits\AttrClassTrait;
use AoHtml\Traits\AttrLabelTrait;
use AoHtml\Traits\AttrTitleTrait;
use AoHtml\Traits\AttrTrait;
use AoHtml\Traits\TagActiveTrait;
use AoHtml\Traits\TagOpenTrait;

class Tab
{

    protected $tag = 'tab';

    use AttrTrait,
        AttrIdTrait,
        AttrClassTrait,
        AttrLabelTrait,
        AttrHrefTrait,
        AttrIconTrait,
        AttrTitleTrait,
        TagActiveTrait,
        TagOpenTrait;

    //------------------------------------------------------------------------------------------------------------------
    // CONSTRUCT
    //------------------------------------------------------------------------------------------------------------------

    public function __construct($label = null, $href = null)
    {
        $this->label($label)->title($label)->href($href);
    }

}
