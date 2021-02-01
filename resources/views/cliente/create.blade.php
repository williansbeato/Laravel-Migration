@extends('templates.main',['titulo'=> " Cadastrar Cliente",'tag' => "CLI"])

@section('titulo') Cadastrar Cliente @endsection

@section('conteudo')

<form action = "{{ route('cliente.store') }}" method = "POST">
        @csrf
        <div class="form-group">
            <label class="font-weight-bold">Nome</label>
            <input type="text" class="form-control" name="nome" value="{{old('nome')}}">
        </div>

        <div class='row'>
            <div class='col-sm-6'>
                <label class="font-weight-bold">E-mail</label>
                <input type="text" class="form-control" name="email" value="{{old('email')}}">
            </div>
            <div class='col-sm-6'>
                <label class="font-weight-bold">Telefone</label>
                <input type="text" class="form-control" name="telefone" value="{{old('telefone')}}">
            </div>
            
        </div>
        <div class='row' style="margin-top:20px">
            <div class='col-sm-4'>
                    <a href="{{route('cliente.index')}}" class="btn btn-danger btn-block"><b>Cancelar / Voltar</b></a>
            </div>
            <div class='col-sm-8'>
                <button type="submit" class="btn btn-success btn-block"><b>Confirmar / Salvar</b></button>
            </div>
        </div>
       
    </form>

@endsection