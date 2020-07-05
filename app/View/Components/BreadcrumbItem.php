<?php

namespace App\View\Components;

use App\View\Components\BaseComponent;

class BreadcrumbItem extends BaseComponent
{
    public $link;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($link = null)
    {
        $this->link = $link;
    }
}
