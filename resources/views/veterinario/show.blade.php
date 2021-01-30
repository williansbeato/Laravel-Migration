@extends('templates.main', ['titulo' => "Informações da Veterinario",'tag' => "VET"])


@section('conteudo')

<ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Nome:</b> {{$veterinario['nome']}}</li>
    <li class="list-group-item"><b>Descrição:</b> {{$veterinario['crmv']}}</li>
    <li class="list-group-item"><b>Especialidade:</b> {{$veterinario->especialidade->nome}}</li>

    <li class="list-group-item">
        <a href="{{route('veterinario.index')}}" class="btn btn-secondary btn-block"><b>Voltar</b></a>
    </li>
</ul>

@endsection
