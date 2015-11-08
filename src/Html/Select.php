<?php

namespace AoHtml\Html;

use AoHtml\Traits\AttrClassTrait;
use AoHtml\Traits\AttrHelpTrait;
use AoHtml\Traits\AttrIdTrait;
use AoHtml\Traits\AttrLabelTrait;
use AoHtml\Traits\AttrNameTrait;
use AoHtml\Traits\AttrOptionsTrait;
use AoHtml\Traits\AttrPatternTrait;
use AoHtml\Traits\AttrPlaceholderTrait;
use AoHtml\Traits\AttrRequiredTrait;
use AoHtml\Traits\AttrTitleTrait;
use AoHtml\Traits\AttrTrait;
use AoHtml\Traits\AttrValueOldTrait;
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
        AttrPatternTrait,
        AttrPlaceholderTrait,
        AttrHelpTrait,
        AttrOptionsTrait,
        AttrValueOldTrait,
        TagOpenTrait;

    //------------------------------------------------------------------------------------------------------------------
    // CONSTRUCT
    //------------------------------------------------------------------------------------------------------------------

    public function __construct($label = null, $name = null, $pattern = null, $options = null)
    {
        $this->label($label);
        $this->name($name);
        $this->pattern($pattern);
        $this->options($options);
    }

}
