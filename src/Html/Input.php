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
use AoHtml\Traits\TagOpenTrait;

class Input
{

    protected $tag = 'input';

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
        AttrValueOldTrait,
        AttrValueTrait,
        TagOpenTrait;

    //------------------------------------------------------------------------------------------------------------------
    // CONSTRUCT
    //------------------------------------------------------------------------------------------------------------------

    public function __construct($label = null, $name = null, $type = 'text', $pattern = null)
    {
        $this->type($type);
        $this->label($label);
        $this->name($name);
        $this->pattern($pattern);
    }

    //------------------------------------------------------------------------------------------------------------------
    // TYPE
    //------------------------------------------------------------------------------------------------------------------

    /**
     * @var string
     */
    protected $type;

    /**
     * @return $this
     */
    public function type($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return $this
     */
    public function text()
    {
        return $this->type('text');
    }

    /**
     * @return $this
     */
    public function number()
    {
        return $this->type('text');
    }

}
