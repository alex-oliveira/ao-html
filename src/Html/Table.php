<?php

namespace AoHtml\Html;

use AoHtml\Traits\ActionTrait;
use AoHtml\Traits\MethodTrait;
use AoHtml\Traits\NameTrait;
use AoHtml\Traits\RowTrait;
use AoHtml\Traits\TagTrait;
use AoHtml\Traits\EndTrait;

class Table
{

    protected $tag = 'table';

    use TagTrait,
        EndTrait;

    //------------------------------------------------------------------------------------------------------------------
    // METHOD
    //------------------------------------------------------------------------------------------------------------------

    protected $thead = true;

    public function thead($thead = true)
    {
        $this->thead = $thead;
        return $this;
    }

    public function tbody()
    {
        return view('ao-html::table-tbody', ['tag' => $this]);
    }

}
