<?php

namespace AoHtml;

use AoHtml\Html\Form;
use AoHtml\Html\Input;
use AoHtml\Html\Panel;
use AoHtml\Html\Panels;
use AoHtml\Html\Textarea;

class Html
{

    /**
     * @return Form
     */
    public function form($action = null, $method = null)
    {
        return new Form($action, $method);
    }

    /**
     * @return Panels
     */
    public function panels()
    {
        return new Panels();
    }

    /**
     * @return Panel
     */
    public function panel($label = null)
    {
        return new Panel($label);
    }

    /**
     * @return Input
     */
    public function input($label = null, $name = null, $type = 'text')
    {
        return new Input($label, $name, $type);
    }

    /**
     * @return Textarea
     */
    public function textarea($label = null, $name = null)
    {
        return new Textarea($label, $name);
    }

}
