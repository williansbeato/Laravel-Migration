@extends('templates.main', ['titulo'=> "Especialidade",'tag' => "ESP"])

@section('conteudo')
<div class="row">
    <div class="col-sm-12">
        <a class="btn btn-primary btn-block bg-dark" href="{{ route('especialidade.create')}}">Cadastrar Nova Especialidade</a>
    </div>
</div>
        
 <x-especialidadeTableList :header="['Nome', 'Eventos']" :data="$especialidade"/>
        
@endsection