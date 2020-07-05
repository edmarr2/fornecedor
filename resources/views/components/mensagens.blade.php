@if(Session::has('success'))
    <x-alert type="success">
        {!! Session::get('success') !!}
    </x-alert>
@endif

@if(Session::has('erro'))
    <x-alert type="danger">
        {!! Session::get('erro') !!}
    </x-alert>
@endif

{{-- erros de formulário --}}
@if (count($errors) > 0)
    <x-alert type="danger">
        <ul class="sem-margem">
            @foreach ($errors->all() as $error)
                <li>{!! $error !!}</li>
            @endforeach
        </ul>
    </x-alert>
@endif
