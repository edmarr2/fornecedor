<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Dropdown extends BaseComponent
{
    public $type;
    public $label;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'primary', $label = '')
    {
        $this->type = $type;
        $this->label = $label;
    }
}
