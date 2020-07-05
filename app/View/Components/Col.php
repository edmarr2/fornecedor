<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Col extends BaseComponent
{
    public $sizeEOffset;

    /**
     * Create a new component instance.
     *
     * @param $size exemplo 2, ou md-2 ou varios serparado por virgula sm-6,md-4,lg-2
     * @return void
     */
    public function __construct($size = null, $offset = null)
    {
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
