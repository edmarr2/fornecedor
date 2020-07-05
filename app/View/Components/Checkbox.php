<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Checkbox extends Component
{
    public $label;
    public $inline;
    public $type;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($label = '', $inline = false, $type = 'primary')
    {
        $this->label = $label;
        $this->inline = $inline;
        $this->type = $type;
    }

    public function render()
    {
        return view('components.checkbox');
    }
}
