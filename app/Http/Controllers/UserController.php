<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
     public function login()
    {
        return view('login');
    }
    

    public function auth(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt(['email'=> $request->email, 'password'=>$request->password])){
            dd('logou!');
        }else{
            return redirect()->back();
        }
    }
}
