<?php

namespace AoHtml\Traits;

trait IdTrait
{

    /**
     * @var string
     */
    protected $id;

    /**
     * @param string $id
     * @return $this
     */
    public function id($id)
    {
        $this->id = $id;
        return $this;
    }

}