@extends('templates.main',['titulo'=> " Cadastrar Veterinario",'tag' => "VET"])

@section('titulo') Cadastrar Veterinario @endsection

@section('conteudo')

<form action = "{{ route('veterinario.store') }}" method = "POST">
        @csrf
        <div class="form-group">    
        <label class="font-weight-bold">Nome</label>
            <input type="text" class="form-control" name="nome" value="{{old('nome')}}">    
        </div>
            
            <div class='row'>

                <div class='col-sm-6'>
                    <div class="form-group">
                        <label class="font-weight-bold" >CRMV</label>
                        <input type="text" class="form-control" name="crmv" value="{{old('crmv')}}">
                    </div>
                </div>
               

                <div class="col-sm-6">
                    <label class="font-weight-bold">Especialidade</label>
                    <select class="form-control" name="especialidade">
                        @foreach( $especialidade as $item )
                            <option value="{{ $item['id'] }}"><p> {{ $item['nome']}} </p></option>
                        @endforeach
                    </select>
                </div>
                
            </div>
            
                <div class='row' style="margin-top:20px;">
                    <div class='col-sm-4'>
                            <a href="{{route('veterinario.index')}}" class="btn btn-danger btn-block"><b>Cancelar / Voltar</b></a>
                    </div>
                    <div class='col-sm-8'>
                        <button type="submit" class="btn btn-success btn-block"><b>Confirmar / Salvar</b></button>
                    </div>
                </div>
       
    </form>

@endsection