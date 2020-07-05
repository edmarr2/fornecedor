<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\Support\Str;

class BaseComponent extends Component
{
    /**
     * Blade view do componente
     *
     * @var string
     */
    protected $view;

    /**
     * Renderiza o componente baseado no template da aplicação
     *
     * @return void
     */
    public function render()
    {
        $template = config('app.template');
        $basename = class_basename($this);
        $view = $this->view ?? Str::kebab($basename);

        $componentViewPath = template_path([
            'components',
            $view
        ]);

        return view('components.components', compact('componentViewPath'));
    }
}