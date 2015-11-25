<?php

namespace AoHtml\Traits;

trait HrefTrait
{

    /**
     * @var string
     */
    protected $href;

    /**
     * @param string $href
     * @return $this
     */
    public function href($href)
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param string $name
     * @param array $params
     * @return $this
     */
    public function route($name, $params = [])
    {
        $this->href = route($name, $params);
        return $this;
    }

}