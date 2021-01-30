@extends('templates.main', ['titulo' => "Alterar Especialidade",'tag' => "ESP"])


@section('conteudo')
    <form action ="{{ route('especialidade.update', $especialidade['id'])}}" method = "POST">
        @csrf
        <div class="form-group">
            <label class="font-weight-bold">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{$especialidade['nome'] }}">
        </div>

        <div class="row">
            <div class="col-sm-7">
                <div class="form-group">
                    <label class="font-weight-bold" >Descrição</label>
                    <textarea type="text" name="descricao" class="form-control">{{ $especialidade['descricao'] }}</textarea>

                </div>
            </div>
            
        </div>
        <div class="row mb-3">
            <div class="col-sm-4">
                <a  href="{{ route('especialidade.index') }}" class="btn btn-danger btn-lg w-100">Cancelar / Voltar</a>
            </div>
            <div class="col-sm-8">
                <button type="submit" class="btn btn-primary btn-lg w-100">Confirmar / Salvar</button>
            </div>
        </div>

        @method('PUT')
    </form>
@endsection