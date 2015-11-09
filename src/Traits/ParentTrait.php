<?php

namespace AoHtml\Traits;

trait ParentTrait
{

    /**
     * @var string
     */
    protected $parent;

    /**
     * @param string $parent
     * @return $this
     */
    public function parent($parent)
    {
        $this->parent = $parent;
        return $this;
    }

}