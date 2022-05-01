@extends('templates.template')
<style>
    .row{
        margin-top: 20%;
    }
</style>
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-md6 offset-md-3">
                    @if($errors->any()) 
                        <div class="text-center mt-3 mb-4 p-2 alert-danger">
                            @foreach($errors->all() as $erro)
                            {{$erro}}<br>
                            @endforeach
                        </div> 
                     @endif 
                    <form method="post" action="{{route('auth.user')}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail">Login</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword">
                        </div>
                        <button type="submit" class="btn btn-primary">Entrar</button>
                    </form>
                </div>
            </div>
        </div>
