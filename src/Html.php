<?php

namespace AoHtml;

use AoHtml\Html\Button;
use AoHtml\Html\Col;
use AoHtml\Html\Form;
use AoHtml\Html\Input;
use AoHtml\Html\Link;
use AoHtml\Html\Panel;
use AoHtml\Html\Panels;
use AoHtml\Html\Row;
use AoHtml\Html\Select;
use AoHtml\Html\Tab;
use AoHtml\Html\Table;
use AoHtml\Html\Tabs;
use AoHtml\Html\Textarea;

class Html
{
    public function css()
    {
        return view('ao-html::assets.css');
    }

    public function js()
    {
        return view('ao-html::assets.js');
    }

    /**
     * @param string $id
     * @return Row
     */
    public function row($id = null)
    {
        return new Row($id);
    }

    /**
     * @return Col
     */
    public function col()
    {
        return new Col();
    }

    /**
     * @return Tabs
     */
    public function tabs()
    {
        return new Tabs();
    }

    /**
     * @param string $label
     * @param string $href
     * @param bool $active
     * @return Tab
     */
    public function tab($label = null, $href = null, $active = false)
    {
        return new Tab($label, $href, $active);
    }

    /**
     * @param string $id
     * @return Panels
     */
    public function panels($id = null)
    {
        return new Panels($id);
    }

    /**
     * @param string $label
     * @param string $parent
     * @return Panel
     */
    public function panel($label = null, $parent = null)
    {
        return new Panel($label, $parent);
    }

    /**
     * @param string $action
     * @param string $method
     * @return Form
     */
    public function form($action = null, $method = 'get')
    {
        return new Form($action, $method);
    }

    /**
     * @param string $label
     * @param string $name
     * @param string $type
     * @param string $pattern
     * @return Input
     */
    public function input($label = null, $name = null, $type = 'text', $pattern = null)
    {
        return new Input($label, $name, $type, $pattern);
    }

    /**
     * @param string $label
     * @param string $name
     * @param string $pattern
     * @return Textarea
     */
    public function textarea($label = null, $name = null, $pattern = null)
    {
        return new Textarea($label, $name, $pattern);
    }

    /**
     * @param string $label
     * @param string $name
     * @param string $pattern
     * @param array $options
     * @return Select
     */
    public function select($label = null, $name = null, $pattern = null, array $options = [])
    {
        return new Select($label, $name, $pattern, $options);
    }

    /**
     * @param string $label
     * @param string $type
     * @return Button
     */
    public function button($label = null, $type = 'button')
    {
        return new Button($label, $type);
    }

    /**
     * @return Table
     */
    public function table()
    {
        return new Table();
    }

    /**
     * @param string $label
     * @param string $href
     * @return Link
     */
    public function link($label = null, $href = '#')
    {
        return new Link($label, $href);
    }

    /**
     * @param string $label
     * @param string $name
     * @param string $route
     * @param bool $button
     * @param string $icon
     * @return Link
     */
    public function linkOrder($label, $name, $route, $button = true, $icon = 'alphabet')
    {
        $l = new Link($label);

        $params = collect(request()->except('sort'));
        if ($name != $params->get('order')) {
            $params->put('order', $name);
            $button ? $l->classes('btn btn-xs btn-default') : null;
        } else {
            $sort = request()->get('sort', false);
            $sort != 'desc' ? $params->put('sort', 'desc') : null ;

            $l->label($label . ' <i class="glyphicon glyphicon-sort-by-' . $icon . ($params->get('sort') == 'desc' ? '' : '-alt') . '"></i>');
            $button ? $l->classes('btn btn-xs btn-primary') : null;
        }

        $l->href(route($route, $params->all()));
        return $l;
    }

}
