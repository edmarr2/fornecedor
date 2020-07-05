<?php

namespace App\View\Components;

use App\View\Components\BaseComponent;

class TabHeader extends BaseComponent
{
    public $id;
    public $active;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $active = false)
    {
        $this->id = $id;
        $this->active = $active;
    }
}
