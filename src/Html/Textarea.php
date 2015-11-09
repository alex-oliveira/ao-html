<?php

namespace AoHtml\Html;

use AoHtml\Traits\HelpTrait;
use AoHtml\Traits\LabelTrait;
use AoHtml\Traits\MaxlengthTrait;
use AoHtml\Traits\NameTrait;
use AoHtml\Traits\PatternTrait;
use AoHtml\Traits\PlaceholderTrait;
use AoHtml\Traits\ReadonlyTrait;
use AoHtml\Traits\RequiredTrait;
use AoHtml\Traits\TitleTrait;
use AoHtml\Traits\TagTrait;
use AoHtml\Traits\OldTrait;
use AoHtml\Traits\ValueTrait;
use AoHtml\Traits\DisabledTrait;

class Textarea
{

    protected $tag = 'textarea';

    use TagTrait,
        NameTrait,
        LabelTrait,
        RequiredTrait,
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

    public function __construct($label = null, $name = null, $pattern = null)
    {
        $this->label($label)->name($name)->pattern($pattern);
    }

}
