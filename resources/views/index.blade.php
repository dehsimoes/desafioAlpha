@extends('templates.template')

@section('content')
    <h1 class="text-center">Alpha Soft</h1> <hr>

    <div class="text-center mt-3 mb-4">
      <a href="{{url("contatos/create")}}">
        <button class="btn btn-success">Cadastrar contato</button>
    </a>
    </div>

    <div class="col-8 m-auto">
      @csrf
    <table class="table table-dark text-center">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

  @foreach ($contatos as $contatos)
    <tr>
      <th scope="row">{{$contatos->nome}}</th>
      <td>{{$contatos->email}}</td>
      <td>{{$contatos->telefone}}</td>
      <td> 
        <a href="{{url("contatos/$contatos->id")}}">
            <button class="btn btn-dark">Visualizar</button>
        </a>
        <a href="{{url("contatos/$contatos->id/edit")}}">
          <button class="btn btn-primary">Editar</button>
        </a>
        <a href="{{url("contatos/$contatos->id")}}" class="js-del">
          <button class="btn btn-danger">Deletar</button>
        </a>
      </td>
    </tr>
  @endforeach
    
  </tbody>
</table>
</div>
@endsection