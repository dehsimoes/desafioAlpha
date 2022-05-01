@extends('templates.template')

@section('content')
    <h1 class="text-center">Alpha Soft</h1> <hr>

    <div class="col-8 m-auto">
      Nome: {{$contatos->nome}}<br>
      Email: {{$contatos->email}}<br>
      Telefone: {{$contatos->telefone}}<br>
    </div>
@endsection