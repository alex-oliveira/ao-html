<?php

namespace AoHtml\Html;

use AoHtml\Traits\AttrIdTrait;
use AoHtml\Traits\AttrClassTrait;
use AoHtml\Traits\AttrLabelTrait;
use AoHtml\Traits\AttrTrait;
use AoHtml\Traits\TagExpandTrait;
use AoHtml\Traits\TagOpenEndTrait;

class Panel
{

    protected $tag = 'panel';

    use AttrTrait,
        AttrIdTrait,
        AttrClassTrait,
        AttrLabelTrait,
        TagExpandTrait,
        TagOpenEndTrait;

    //------------------------------------------------------------------------------------------------------------------
    // CONSTRUCT
    //------------------------------------------------------------------------------------------------------------------

    public function __construct($label = null)
    {
        $this->label($label);
    }

}
