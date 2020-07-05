<div class="title-box">
    <div class="title-content">
        <h{{$size}} class="my-2 @isset($type)text-{{ $type }}@endisset">{{ $slot }}</h{{$size}}>
    </div>

    @isset($extraContent)
        <div class="title-extra-content">
            {!! $extraContent !!}
        </div>
    @endisset
</div>