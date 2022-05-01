@extends('templates.template')

@section('content')
    <h1 class="text-center">Alpha Soft</h1> <hr>

    <div class="col-8 m-auto">
      Nome: {{$contato->name}}<br>
      Email: {{$contato->email}}<br>
      Telefone: {{$contato->telefone}}<br>
    </div>
@endsection