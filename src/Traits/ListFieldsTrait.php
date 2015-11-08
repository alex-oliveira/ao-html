<?php

namespace AoHtml\Traits;

use AoHtml\Html\Input;
use AoHtml\Html\Select;
use AoHtml\Html\Textarea;

trait ListFieldsTrait
{

    /**
     * @var array
     */
    protected $fields = [];

    /**
     * @return Input
     */
    public function input($label = null)
    {
        $input = new Input($label);
        return $this->fields[] = $input;
    }

    /**
     * @return Textarea
     */
    public function textarea($label = null)
    {
        $textarea = new Textarea($label);
        return $this->fields[] = $textarea;
    }

    /**
     * @return Select
     */
    public function select($label = null)
    {
        $select = new Select($label);
        return $this->fields[] = $select;
    }

}