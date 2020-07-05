<?php

namespace App\View\Components;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class AsyncTable extends Component
{
    public $id;
    public $url;
    public $chave;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($url, $id = null)
    {
        $this->url = $url;
        $this->chave = 'tb-' . Str::random(8);
        $this->id = $id;
    }

    public function render()
    {
        return view('components.async-table');
    }
}
