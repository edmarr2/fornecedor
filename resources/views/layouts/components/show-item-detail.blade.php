@php
    if(!isset($sizeLabel) && isset($colspan) && $colspan == 2):
        $sizeLabel = '6,sm-4,md-4,lg-5,xl-5';
    endif;
@endphp

<x-row>
    <x-col :size="isset($sizeLabel) ? $sizeLabel : '6,sm-4,md-4,lg-2,xl-2'">
        <label class="float-right text-bold">{!! $label !!}</label>
    </x-col>
    <x-col>{{ $slot }}</x-col>
</x-row>
