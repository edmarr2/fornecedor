<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DropdownItem extends BaseComponent
{
    public $value;
    public $link;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($value = null, $link = '#')
    {
        $this->value = $value;
        $this->link = $link;
    }
}
