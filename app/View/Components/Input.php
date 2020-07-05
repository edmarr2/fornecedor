<?php

namespace App\View\Components;

use App\View\Components\BaseComponent;

class Input extends BaseComponent
{
    public $size;
    public $required;
    public $uppercase;
    public $autocomplete;
    public $disabled;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        string $size = 'md',
        $required = false,
        $uppercase = false,
        $autocomplete = false,
        $disabled = false
    ) {
        $this->size = $size;
        $this->required = $required;
        $this->uppercase = $uppercase;
        $this->autocomplete = $autocomplete;
        $this->disabled = $disabled;
    }
}
