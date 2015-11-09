<?php

namespace AoHtml\Html;

use AoHtml\Traits\ActionTrait;
use AoHtml\Traits\MethodTrait;
use AoHtml\Traits\NameTrait;
use AoHtml\Traits\RowTrait;
use AoHtml\Traits\TagTrait;
use AoHtml\Traits\EndTrait;

class Form
{

    protected $tag = 'form';

    use TagTrait,
        NameTrait,
        ActionTrait,
        MethodTrait,
        RowTrait,
        EndTrait;

    //------------------------------------------------------------------------------------------------------------------
    // CONSTRUCT
    //------------------------------------------------------------------------------------------------------------------

    public function __construct($action = null, $method = 'get')
    {
        $this->action($action)->method($method);
    }

    //------------------------------------------------------------------------------------------------------------------
    // METHOD
    //------------------------------------------------------------------------------------------------------------------

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
