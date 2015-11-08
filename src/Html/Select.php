<?php

namespace AoHtml\Html;

use AoHtml\Traits\AttrClassTrait;
use AoHtml\Traits\AttrIdTrait;
use AoHtml\Traits\AttrLabelTrait;
use AoHtml\Traits\AttrNameTrait;
use AoHtml\Traits\AttrPlaceholderTrait;
use AoHtml\Traits\AttrRequiredTrait;
use AoHtml\Traits\AttrTitleTrait;
use AoHtml\Traits\AttrTrait;
use AoHtml\Traits\TagOpenTrait;

class Select
{
    protected $tag = 'select';

    use AttrTrait,
        AttrIdTrait,
        AttrClassTrait,
        AttrLabelTrait,
        AttrNameTrait,
        AttrTitleTrait,
        AttrRequiredTrait,
        AttrPlaceholderTrait,
        TagOpenTrait;

    //------------------------------------------------------------------------------------------------------------------
    // CONSTRUCT
    //------------------------------------------------------------------------------------------------------------------

    public function __construct($label = null, $name = null)
    {
        $this->label($label);
        $this->name($name);
    }

}
