<?php

namespace AoHtml\Traits;

trait AttrTitleTrait
{

    /**
     * @var string
     */
    protected $title;

    /**
     * @param string $title
     * @return $this
     */
    public function title($title)
    {
        $this->title = $title;
        return $this;
    }

}