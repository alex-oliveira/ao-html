<?php

namespace AoHtml\Html;

use AoHtml\Traits\TagTrait;
use AoHtml\Traits\LabelTrait;
use AoHtml\Traits\TitleTrait;
use AoHtml\Traits\TypeTrait;
use AoHtml\Traits\DisabledTrait;

class Button
{

    protected $tag = 'button';

    use TagTrait,
        TypeTrait,
        LabelTrait,
        TitleTrait,
        DisabledTrait;

    //------------------------------------------------------------------------------------------------------------------
    // CONSTRUCT
    //------------------------------------------------------------------------------------------------------------------

    public function __construct($label = null, $type = 'button')
    {
        $this->label($label)->type($type);
    }

    //------------------------------------------------------------------------------------------------------------------
    // TYPE
    //------------------------------------------------------------------------------------------------------------------

    /**
     * @return $this
     */
    public function submit()
    {
        return $this->type('submit');
    }

    /**
     * @return $this
     */
    public function reset()
    {
        return $this->type('reset');
    }

}
