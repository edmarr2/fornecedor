@extends('layouts.app')

@section('page-title', 'Editar')

@section('content')
<div class="content">
    <div class="container-fluid">
    <x-form :action="route('fornecedores.update', $model)" method="put">
        @include('fornecedores.form', ['editar' => true])

        @include('components.form-submit-buttons', [
            'url' => route('fornecedores.show', $model)
        ])
    </x-form>
    </div>
</div>
@endsection
