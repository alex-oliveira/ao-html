<?php

namespace AoHtml\Html;

use AoHtml\Traits\HelpTrait;
use AoHtml\Traits\LabelTrait;
use AoHtml\Traits\MaxlengthTrait;
use AoHtml\Traits\MaxTrait;
use AoHtml\Traits\MinTrait;
use AoHtml\Traits\NameTrait;
use AoHtml\Traits\PatternTrait;
use AoHtml\Traits\PlaceholderTrait;
use AoHtml\Traits\ReadonlyTrait;
use AoHtml\Traits\RequiredTrait;
use AoHtml\Traits\TitleTrait;
use AoHtml\Traits\TagTrait;
use AoHtml\Traits\TypeTrait;
use AoHtml\Traits\OldTrait;
use AoHtml\Traits\ValueTrait;
use AoHtml\Traits\DisabledTrait;

class Input
{

    protected $tag = 'input';

    use TagTrait,
        TypeTrait,
        NameTrait,
        LabelTrait,
        RequiredTrait,
        MinTrait,
        MaxTrait,
        MaxlengthTrait,
        TitleTrait,
        PlaceholderTrait,
        HelpTrait,
        OldTrait,
        ValueTrait,
        PatternTrait,
        ReadonlyTrait,
        DisabledTrait;

    //------------------------------------------------------------------------------------------------------------------
    // CONSTRUCT
    //------------------------------------------------------------------------------------------------------------------

    public function __construct($label = null, $name = null, $type = 'text', $pattern = null)
    {
        $this->label($label)->name($name)->type($type)->pattern($pattern);
    }

    //------------------------------------------------------------------------------------------------------------------
    // TYPE
    //------------------------------------------------------------------------------------------------------------------

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
