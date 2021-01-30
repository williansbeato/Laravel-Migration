@extends('templates.main', ['titulo'=> "Veterinario",'tag' => "VET"])

@section('conteudo')
<div class="row">
    <div class="col-sm-12">
        <a class="btn btn-primary btn-block bg-dark" href="{{ route('veterinario.create')}}">Cadastrar Novo Veterinario</a>
    </div>
</div>
        
<x-veterinarioTableList :header="['Nome', 'Eventos']" :data="$veterinario"/>
        
@endsection