<?php

if (!function_exists('html')) {

    /**
     * Get the available alert instance.
     *
     * @return \AoHtml\Html
     */
    function html()
    {
        return app('html');
    }

}