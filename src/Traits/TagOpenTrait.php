<?php

namespace AoHtml\Traits;

trait TagOpenTrait
{

    public function open()
    {
        return view('ao-html::' . $this->tag, ['tag' => $this]);
    }

}