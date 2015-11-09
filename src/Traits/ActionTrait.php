<?php

namespace AoHtml\Traits;

trait ActionTrait
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