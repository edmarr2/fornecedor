<?php

namespace App\View\Components;

use App\View\Components\BaseComponent;

class Select extends BaseComponent
{
    public $value;
    public $options;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($value = null, $old = null, $options = [])
    {
        $this->options = $options;
        $this->value = $old ?: $value;
    }
}
