<?php

namespace AoHtml\Traits;

trait TagOpenEndTrait
{

    public function open()
    {
        return view('ao-html::' . $this->tag, ['tag' => $this]);
    }

    public function end()
    {
        return view('ao-html::' . $this->tag . '-end');
    }

}