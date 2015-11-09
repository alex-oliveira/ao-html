<?php

namespace AoHtml\Html;

use AoHtml\Traits\LabelTrait;
use AoHtml\Traits\ParentTrait;
use AoHtml\Traits\RowTrait;
use AoHtml\Traits\TagTrait;
use AoHtml\Traits\ClosedTrait;
use AoHtml\Traits\EndTrait;

class Panel
{

    protected $tag = 'panel';

    use TagTrait,
        LabelTrait,
        ParentTrait,
        ClosedTrait,
        RowTrait,
        EndTrait;

    //------------------------------------------------------------------------------------------------------------------
    // CONSTRUCT
    //------------------------------------------------------------------------------------------------------------------

    public function __construct($label = null, $parent = null)
    {
        $this->label($label)->parent($parent);
    }

}
