<?php

namespace AoHtml\Html;

use AoHtml\Traits\TagTrait;
use AoHtml\Traits\EndTrait;

class Panels
{

    protected $tag = 'panels';

    use TagTrait,
        EndTrait;

    //------------------------------------------------------------------------------------------------------------------
    // CONSTRUCT
    //------------------------------------------------------------------------------------------------------------------

    public function __construct($id = null)
    {
        $this->id($id);
    }

}
