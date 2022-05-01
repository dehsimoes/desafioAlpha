@extends('templates.template')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md6 offset-md-3">
                    @if($errors->any()) 
                        <div class="text-center mt-4 mb-4 p-2 alert-danger">
                            @foreach($errors->all() as $erro)
                            {{$erro}}<br>
                            @endforeach
                        </div> 
                     @endif 
                    <form method="post" action="{{route('auth.user')}}">
                        @csrf
                        <div class="form-group">
                            <label for="inputLogin">Login</label>
                            <input type="email" name="email" class="form-control" id="inputLogin">
                        </div>
                        <div class="form-group">
                            <label for="inputPassword">Password</label>
                            <input type="password" name="password" class="form-control" id="inputPassword">
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
