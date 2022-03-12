<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserLogin;

class LoginController extends Controller
{
    public function printView() {
        return view('welcome',['nome' => 'joao']);
    }

    public function store(Request $request) {
        $dados = [
            $request->input('nome'),
            $request->input('email'),
            $request->input('senha')
        ];

        $request->validate([
            'nome'  => 'required',
            'email' => 'required',
            'senha' => 'required'
        ]);

        UserLogin::create([
            'nome'  => $request->nome,
            'email' => $request->email,
            'senha' => $request->senha,
        ]);

        return view('dados', ['dados' => $dados]);
    }
}
