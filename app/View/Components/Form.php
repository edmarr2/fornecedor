<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Form extends Component
{
    public $method;
    public $methodField;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($method)
    {
        $method = strtoupper($method);
        $methodField = $method;

        if (in_array($method, ['PUT', 'DELETE'])) {
            $method = 'POST';
        }

        $this->method = $method;
        $this->methodField = $methodField;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.form');
    }
}
