<?php

namespace AoHtml\Html;

use AoHtml\Traits\BaseTrait;
use AoHtml\Traits\EndTrait;

class Row
{

    use BaseTrait, EndTrait;

    protected $tag = 'row';
    protected $lg = 0;
    protected $md = 0;
    protected $sm = 0;
    protected $xs = 0;

    /**
     * @return Col
     */
    public function col()
    {
        return new Col($this);
    }

    /**
     * @param Col $col
     */
    public function clearfix(Col $col)
    {
        $widths = ['lg', 'md', 'sm', 'xs'];
        foreach ($widths as $x) {
            $this->{$x} += $col->{$x};
            if ($this->{$x} >= 12) {
                $this->{$x} = 0;
                echo '<div class="clearfix visible-' . $x . '"></div>';
            }
        }
    }

}
