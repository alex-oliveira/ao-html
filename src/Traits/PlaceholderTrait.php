<?php

namespace AoHtml\Traits;

trait PlaceholderTrait
{

    /**
     * @var string
     */
    protected $placeholder;

    /**
     * @param string $placeholder
     * @return $this
     */
    public function placeholder($placeholder = '')
    {
        if ($placeholder == '')
            $placeholder = $this->tag == 'select' ? 'Selecione...' : 'Preencha...';

        $this->placeholder = $placeholder;
        return $this;
    }

}