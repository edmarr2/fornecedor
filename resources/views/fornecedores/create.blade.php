@extends('layouts.app')

@section('content')
<div class="content">
    <div class="container-fluid">
    <form action="{{route('fornecedores.store')}}" method="post">
        @include('fornecedores.form', ['editar' => false])
        <hr>
        <row>
            <col offset="md-0,lg-0">
            <button type="submit" size="lg" class="btn btn-success">
                <icon>save</icon> Salvar
            </button>
        <a href="{{ route('fornecedores.index') }}" class="btn btn-danger">
            <icon>block</icon> Cancelar
        </a>
        </col>
        </row>
    </form>
    </div>
</div>
@endsection
