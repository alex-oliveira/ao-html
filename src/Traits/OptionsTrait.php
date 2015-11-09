<?php

namespace AoHtml\Traits;

trait OptionsTrait
{

    /**
     * @var array
     */
    protected $options;

    /**
     * @var string
     */
    protected $options_label;

    /**
     * @var string
     */
    protected $options_value;

    /**
     * @param array $options
     * @param string $label
     * @param string $value
     * @return $this
     */
    public function options(array $options, $label = 'name', $value = 'id')
    {
        $this->options = $options;
        $this->options_label = $label;
        $this->options_value = $value;
        return $this;
    }

}