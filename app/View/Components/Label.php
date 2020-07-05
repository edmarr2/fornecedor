<?php

namespace App\View\Components;

use App\View\Components\BaseComponent;

class Label extends BaseComponent
{
    public $sizeEOffset;
    public $position;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($size = null, $offset = null, $position = 'left')
    {
        $this->position = $position;

        $sizes = collect(explode(',', $size))->filter();
        $offsets = collect(explode(',', $offset))->filter();

        $sizes = $sizes->map(function ($size) {
                return 'col-' . $size;
            });
        $size = $sizes->isNotEmpty() ? $sizes->implode(' ') : 'col';

        $offsets = $offsets->map(function ($offset) {
                return 'offset-' . $offset;
            });
        $offset = $offsets->isNotEmpty() ? $offsets->implode(' ') : '';

        $sizeEOffset = collect([$size, $offset])
            ->filter()
            ->implode(' ');

        $this->sizeEOffset = $sizeEOffset;
    }
}
