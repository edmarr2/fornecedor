<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Icon extends Component
{
    public $prefix;
    public $size;
    public $font;
    public $animate;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($prefix = 'fas', $size = 1, $font = 'awesome', $animate = false)
    {
        $this->prefix = $prefix;
        $this->size = $size;
        $this->font = $font;
        $this->animate = $animate ? 'fa-pulse' : '';
    }

    public function render()
    {
        return view('components.icon');
    }
}
