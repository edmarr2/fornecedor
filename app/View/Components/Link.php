<?php

namespace App\View\Components;

use App\View\Components\BaseComponent;

class Link extends BaseComponent
{
    public $type;
    public $size;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type = 'primary', $size = 'md')
    {
        $this->type = $type;
        $this->size = $size;
    }
}
