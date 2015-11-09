<?php

namespace AoHtml\Html;

use AoHtml\Traits\HelpTrait;
use AoHtml\Traits\LabelTrait;
use AoHtml\Traits\NameTrait;
use AoHtml\Traits\OptionsTrait;
use AoHtml\Traits\PatternTrait;
use AoHtml\Traits\PlaceholderTrait;
use AoHtml\Traits\ReadonlyTrait;
use AoHtml\Traits\RequiredTrait;
use AoHtml\Traits\TitleTrait;
use AoHtml\Traits\TagTrait;
use AoHtml\Traits\OldTrait;
use AoHtml\Traits\ValueTrait;
use AoHtml\Traits\DisabledTrait;

class Select
{

    protected $tag = 'select';

    use TagTrait,
        NameTrait,
        LabelTrait,
        RequiredTrait,
        TitleTrait,
        PlaceholderTrait,
        HelpTrait,
        OptionsTrait,
        OldTrait,
        ValueTrait,
        PatternTrait,
        ReadonlyTrait,
        DisabledTrait;

    //------------------------------------------------------------------------------------------------------------------
    // CONSTRUCT
    //------------------------------------------------------------------------------------------------------------------

    public function __construct($label = null, $name = null, $pattern = null, $options = null)
    {
        $this->label($label)->name($name)->pattern($pattern)->options($options);
    }

}
