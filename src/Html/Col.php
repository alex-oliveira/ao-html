<?php

namespace AoHtml\Html;

use AoHtml\Traits\BaseTrait;
use AoHtml\Traits\EndTrait;

class Col
{

    use BaseTrait, EndTrait;

    protected $tag = 'col';

    protected $lg;

    /**
     * @param integer $lg
     * @return $this
     */
    public function lg($lg = 4)
    {
        $this->lg = $lg;
        return $this;
    }

    protected $md;

    /**
     * @param integer $md
     * @return $this
     */
    public function md($md = 4)
    {
        $this->md = $md;
        return $this;
    }

    protected $sm;

    /**
     * @param integer $sm
     * @return $this
     */
    public function sm($sm = 4)
    {
        $this->sm = $sm;
        return $this;
    }

    protected $xs;

    /**
     * @param integer $xs
     * @return $this
     */
    public function xs($xs = 4)
    {
        $this->xs = $xs;
        return $this;
    }

}
