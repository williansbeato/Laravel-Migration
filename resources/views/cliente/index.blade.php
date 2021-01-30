@extends('templates.main', ['titulo'=> "Cliente",'tag' => "CLI"])

@section('conteudo')
<div class="row">
    <div class="col-sm-12">
        <a class="btn btn-primary btn-block bg-dark" href="{{ route('cliente.create')}}">Cadastrar Novo Cliente</a>
    </div>
</div>
        
 <x-clienteTableList :header="['Nome', 'Eventos']" :data="$cliente"/>
        
@endsection