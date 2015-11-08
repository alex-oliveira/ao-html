<?php

namespace AoHtml\Html;

use AoHtml\Traits\AttrActionTrait;
use AoHtml\Traits\AttrIdTrait;
use AoHtml\Traits\AttrNameTrait;
use AoHtml\Traits\AttrClassTrait;
use AoHtml\Traits\AttrTrait;
use AoHtml\Traits\TagOpenEndTrait;

class Form
{

    protected $tag = 'form';

    use AttrTrait,
        AttrIdTrait,
        AttrClassTrait,
        AttrNameTrait,
        AttrActionTrait,
        TagOpenEndTrait;

    //------------------------------------------------------------------------------------------------------------------
    // CONSTRUCT
    //------------------------------------------------------------------------------------------------------------------

    public function __construct($action = null, $method = null)
    {
        $this->action($action);
        $this->method($method);
    }

    //------------------------------------------------------------------------------------------------------------------
    // METHOD
    //------------------------------------------------------------------------------------------------------------------

    /**
     * @var string
     */
    protected $method = 'get';

    /**
     * @param $method
     * @return $this
     */
    public function method($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return Form
     */
    public function get()
    {
        return $this->method('get');
    }

    /**
     * @return Form
     */
    public function post()
    {
        return $this->method('post');
    }

    /**
     * @return Form
     */
    public function put()
    {
        return $this->method('put');
    }

    /**
     * @return Form
     */
    public function delete()
    {
        return $this->method('delete');
    }

    //------------------------------------------------------------------------------------------------------------------
    // ACTIONS
    //------------------------------------------------------------------------------------------------------------------

    public function actions()
    {
        return view('ao-html::form-actions');
    }

}
