@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($contatos)) Editar @else Cadastrar @endif </h1> <hr>

    <div class="col-8 m-auto">
      @if($errors->any()) 
        <div class="text-center mt-4 mb-4 p-2 alert-danger">
            @foreach($errors->all() as $erro)
              {{$erro}}<br>
            @endforeach
        </div> 
     @endif 

      @if(isset($contatos))
      <form name="formEdit" id="formEdit" method="post" action="{{url("contatos/$contatos->id")}}">
        @method('PUT')
      @else 
        <form name="formCad" id="formCad" method="post" action="{{url('contatos')}}">
      @endif
      
        @csrf
        <input class="form-control" type="text" name="nome" id="nome" placeholder="Digite um nome" value="{{$contatos->nome ?? ''}}" required>
        <input class="form-control" type="email" name="email" id="email" placeholder="Digite um email" value="{{$contatos->email ?? ''}}" required>
        <input class="form-control" type="number" name="telefone" id="telefone" placeholder="Digite um telefone" value="{{$contatos->telefone ?? ''}}" required>
        <input class="btn btn-primary" type="submit" value="@if(isset($contatos)) Editar @else Cadastrar @endif">
      </form>
    </div>
@endsection