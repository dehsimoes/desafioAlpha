<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContatosRequest;
use App\Models\ModelContato;
use App\User;

class ContatosController extends Controller
{

    private $objUser;
    private $objContato;

    public function __construct()
    {
        $this->objUser=new User();
        $this->objContato=new ModelContato();
    }

    public function index() 
    {
        $contatos=$this->objContato->all()->sortBy('nome');
        return view('index', compact('contatos'));
    }

    public function show($id)
    {
        $contatos=$this->objContato->find($id);
        return view('show', compact('contatos'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(ContatosRequest $request)
    {
        $cad=$this->objContato->create([
            'nome'=>$request->nome,
            'email'=>$request->email,
            'telefone'=>$request->telefone
        ]);
        if($cad)
        {
            return redirect('contatos');
        }
    }

    public function edit($id)
    {
        $contatos=$this->objContato->find($id);
        return view('create', compact('contatos'));
    }

    public function update(ContatosRequest $request, $id)
    {
        $this->objContato->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'email'=>$request->email,
            'telefone'=>$request->telefone
        ]);
        return redirect('contatos');
    }

    public function destroy($id)
    {
       $del=$this->objContato->destroy($id);
       return($del)?"sim":"nao";
    }
}
