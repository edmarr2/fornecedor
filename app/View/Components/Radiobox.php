<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Radiobox extends Component
{
    public $label;
    public $inline;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label, $inline = false)
    {
        $this->label = $label;
        $this->inline = $inline;
    }

    public function render()
    {
        return view('components.radiobox');
    }
}
