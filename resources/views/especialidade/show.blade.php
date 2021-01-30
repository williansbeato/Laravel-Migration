@extends('templates.main', ['titulo' => "Informações da Especialidade",'tag' => "ESP"])


@section('conteudo')

<ul class="list-group list-group-flush">
    <li class="list-group-item"><b>Nome:</b> {{$especialidade['nome']}}</li>
    <li class="list-group-item"><b>Descrição:</b> {{$especialidade['descricao']}}</li>
    <li class="list-group-item">
        <a href="{{route('especialidade.index')}}" class="btn btn-secondary btn-block"><b>Voltar</b></a>
    </li>
</ul>

@endsection
