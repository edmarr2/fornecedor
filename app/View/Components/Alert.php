<?php

namespace App\View\Components;

use App\View\Components\BaseComponent;

class Alert extends BaseComponent
{
    public $type;
    public $dismiss;

    /**
     * Create a new component instance.
     *
     * @param  string  $type
     * @return void
     */
    public function __construct($type, $dismiss = true)
    {
        $this->type = $type;
        $this->dismiss = $dismiss;
    }
}
