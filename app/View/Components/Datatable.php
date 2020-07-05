<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Datatable extends Component
{
    public $tableService;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($service, $params = [])
    {
        $this->tableService = resolve($service);
        $this->tableService->setParams($params);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.datatable');
    }
}
