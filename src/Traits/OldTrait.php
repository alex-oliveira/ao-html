<?php

namespace AoHtml\Traits;

trait OldTrait
{

    /**
     * @var bool
     */
    protected $old = false;

    /**
     * @param bool|true $status
     * @return $this
     */
    public function old($status = true)
    {
        $this->old = $status;
        return $this;
    }

    /**
     * @return $this
     */
    public function oldName()
    {
        if (empty($this->name)) {
            return null;
        }
        return preg_replace('/\.$/', '', preg_replace('/\.+/', '.', str_replace('[', '.', str_replace(']', '.', $this->name))));
    }

}