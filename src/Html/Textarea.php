<?php

namespace AoHtml\Html;

use AoHtml\Traits\AttrClassTrait;
use AoHtml\Traits\AttrHelpTrait;
use AoHtml\Traits\AttrIdTrait;
use AoHtml\Traits\AttrLabelTrait;
use AoHtml\Traits\AttrMaxlengthTrait;
use AoHtml\Traits\AttrNameTrait;
use AoHtml\Traits\AttrPatternTrait;
use AoHtml\Traits\AttrPlaceholderTrait;
use AoHtml\Traits\AttrRequiredTrait;
use AoHtml\Traits\AttrTitleTrait;
use AoHtml\Traits\AttrTrait;
use AoHtml\Traits\AttrValueOldTrait;
use AoHtml\Traits\AttrValueTrait;
use AoHtml\Traits\TagDisabledTrait;
use AoHtml\Traits\TagOpenTrait;

class Textarea
{

    protected $tag = 'textarea';

    use AttrTrait,
        AttrIdTrait,
        AttrClassTrait,
        AttrLabelTrait,
        AttrNameTrait,
        AttrTitleTrait,
        AttrRequiredTrait,
        AttrPatternTrait,
        AttrPlaceholderTrait,
        AttrHelpTrait,
        AttrMaxlengthTrait,
        AttrValueTrait,
        AttrValueOldTrait,
        TagDisabledTrait,
        TagOpenTrait;

    //------------------------------------------------------------------------------------------------------------------
    // CONSTRUCT
    //------------------------------------------------------------------------------------------------------------------

    public function __construct($label = null, $name = null, $pattern = null)
    {
        $this->label($label);
        $this->name($name);
        $this->pattern($pattern);
    }

}
