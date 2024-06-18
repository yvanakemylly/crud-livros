<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function getAll() {
        return User::all();
    }

    public function cadastrar(Request $request) {
        $dados = $request->except('_token');

        DB::table('users')->insert([
            'nome' => $dados['nome'],
            'email' => $dados['email'],
            'senha' => bcrypt($dados['senha']),
        ]);

        return redirect('/entrar');
    }
}
