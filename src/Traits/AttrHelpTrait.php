<?php

namespace AoHtml\Traits;

trait AttrHelpTrait
{

    /**
     * @var string
     */
    protected $help;

    /**
     * @param string $help
     * @return $this
     */
    public function help($help)
    {
        $this->help = $help;
        return $this;
    }

}