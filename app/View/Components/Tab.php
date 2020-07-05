<?php

namespace App\View\Components;

use App\View\Components\BaseComponent;

class Tab extends BaseComponent
{
    public $justify;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($justify = false)
    {
        $this->justify = $justify;
    }
}
