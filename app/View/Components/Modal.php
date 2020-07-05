<?php

namespace App\View\Components;

use App\View\Components\BaseComponent;

class Modal extends BaseComponent
{
    public $id;
    public $title;
    public $size;

    /**
     * Create a new component instance.
     *
     * @param  string  $type
     * @return void
     */
    public function __construct($id, $title, $size = 'md')
    {
        $this->id = $id;
        $this->title = $title;
        $this->size = $size;
    }
}
