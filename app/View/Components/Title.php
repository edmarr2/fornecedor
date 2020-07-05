<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Title extends BaseComponent
{
    public $size;
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($size = 3, $type = null)
    {
        $this->size = $size;
        $this->type = $type;
    }

    public function render()
    {
        return view('components.title');
    }
}
