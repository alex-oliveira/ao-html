<?php

namespace AoHtml\Traits;

trait EndTrait
{

    public function end()
    {
        return view('ao-html::' . $this->tag . '-end', ['tag' => $this]);
    }

}