<?php

namespace App\View\Components;

use App\View\Components\BaseComponent;

class Button extends BaseComponent
{
    /**
     * Tamanho do Botão
     * lg, md, sm
     *
     * @var string
     */
    public $size;

    /**
     * Estilo do botão
     * primary, success, warning, danger
     *
     * @var string
     */
    public $type;

    /**
     * Arredondado
     *
     * @var boolean
     */
    public $rounded;

    /**
     * Botão de submit
     *
     * @var boolean
     */
    public $submit;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(
        $size = 'md',
        $type  = 'primary',
        $rounded = false,
        $submit = false
    ) {
        $this->size = $size;
        $this->type = $type;
        $this->rounded = $rounded;
        $this->submit = $submit;
    }
}
