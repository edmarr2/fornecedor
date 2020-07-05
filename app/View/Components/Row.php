<?php

namespace App\View\Components;

use App\View\Components\BaseComponent;

class Row extends BaseComponent
{
    public $justifyContent;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($justifyContent = '')
    {
        $this->justifyContent = $justifyContent ? 'justify-content-'.$justifyContent : '';
    }
}
