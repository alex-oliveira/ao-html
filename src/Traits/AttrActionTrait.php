<?php

namespace AoHtml\Traits;

trait AttrActionTrait
{

    /**
     * @var string
     */
    protected $action;

    /**
     * @param string $action
     * @return $this
     */
    public function action($action)
    {
        $this->action = $action;
        return $this;
    }

}