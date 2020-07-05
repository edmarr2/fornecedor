@extends('layouts.app')
@inject('fornecedorService','App\Contracts\Models\FornecedorServiceInterface')
@section('page-title', 'Fornecedores')
@php
  $fornecedorPorEmpresa = $fornecedorService->all()->groupBy('empresa_id');
@endphp
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <a class="btn btn-success" href="{{route('fornecedores.create')}}">
                Cadastrar
            </a>
        </div>
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-rose card-header-icon">
              <div class="card-icon">
                <span class="material-icons">Fornecedores</span>
              </div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th class="text-center">#</th>
                      <th>Nome</th>
                      <th>Email</th>
                      <th>Mensalidade</th>
                      <th class="text-right">Ações</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($fornecedorPorEmpresa->get(Auth()->user()->id,[]) as $fornecedor)
                    <tr>
                      <td class="text-center">{{$fornecedor->id}}</td>
                      <td>{{$fornecedor->nome}}</td>
                      <td>{{$fornecedor->email}}</td>
                      <td>R$ {{$fornecedor->mensalidade}}</td>
                      <td class="td-actions text-right">
                        <a type="button" href="{{ route('fornecedores.edit',$fornecedor->id) }}" rel="tooltip" class="btn btn-success">
                          Editar
                        </a>
                        <form action="{{ route('fornecedores.destroy', $fornecedor) }}" method="POST">
                          {{ method_field('DELETE') }}
                          {{ csrf_field() }}
                          <button type="submit" rel="tooltip" class="btn btn-danger">
                            Excluir  
                          </button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection
