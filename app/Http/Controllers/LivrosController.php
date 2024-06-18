<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class LivrosController extends Controller
{
    public function obter()
    {
        $livros = DB::table('livros')->where([
            'user_id' => Auth::user()->id
        ])->get();

        return view('livros', ['livros' => $livros]);
    }

    public function criar(Request $request)
    {
        $dados = $request->except('_token');

        DB::table('livros')->insert([
            ...$dados,
            'user_id' => Auth::user()->id
        ]);

        return redirect('/livros');
    }

    public function editar(Request $request)
    {
        DB::table('livros')->where('id', $request->id)->update($request->except('id', '_token'));

        return redirect('/livros');
    }

    public function excluir(Request $request)
    {
        DB::table('livros')->delete($request->get('id'));

        return redirect('/livros');
    }
}
