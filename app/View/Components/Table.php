<?php

namespace App\View\Components;

use App\View\Components\BaseComponent;

class Table extends BaseComponent
{
    public $head;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($thead = null)
    {
        $this->head = $thead;
    }
}
