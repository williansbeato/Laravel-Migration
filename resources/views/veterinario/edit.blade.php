@extends('templates.main', ['titulo' => "Alterar Veterinario",'tag' => "VET"])



@section('conteudo')
    <form action ="{{ route('veterinario.update', $dados['id'])}}" method = "POST">
        @csrf
        <div class="form-group">
            <label class="font-weight-bold">Nome</label>
            <input type="text" name="nome" class="form-control" value="{{ $dados['nome']}}">
        </div>

        <div class="row">
            <div class="col-sm-6">
                <div class="form-group">
                    <label class="font-weight-bold" >CRMV</label>
                    <input type="text" name="crmv" class="form-control" value="{{ $dados['nome']}}">

                </div>
            </div>

            <div class='col-sm-5'>
                <label>Especialidade</label>
                <select class="form-control" name="especialidade">
                    @foreach( $especialidade as $item )
                        <option value="{{ $item['id'] }}"><p> {{ $item['nome']}} </p></option>
                    @endforeach
                </select>

            </div>
            
        </div>
        <div class="row mb-3">
            <div class="col-sm-4">
                <a  href="{{ route('veterinario.index') }}" class="btn btn-danger btn-lg w-100">Cancelar / Voltar</a>
            </div>
            <div class="col-sm-8">
                <button type="submit" class="btn btn-primary btn-lg w-100">Confirmar / Salvar</button>
            </div>
        </div>

        @method('PUT')
    </form>
@endsection