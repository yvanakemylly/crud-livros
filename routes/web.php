<?php

use App\Http\Controllers\LivrosController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect()->intended('/livros');
});

Route::get('/entrar', function () {
    return view('entrar',);
})->name('entrar');

Route::post('/entrar', [LoginController::class, 'authenticate']);
Route::post('/sair', [LoginController::class, 'authenticate']);

Route::get('/cadastrar', function () {
    info('teste');
    return view('cadastro',);
});

Route::post('/cadastrar', [UserController::class, 'cadastrar']);

// Rotas protegidas
Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout']);

    Route::get('/livros', [LivrosController::class, 'obter']);
    Route::get('/criar-livro', function () {
        return view('criar-livro');
    });
    Route::get('/editar-livro', function (Request $request) {
        $livro = DB::table('livros')->where([
            'id' => $request->get('id')
        ])->first();
    
        return view('editar-livro', [ 'livro' => $livro ]);
    });
    
    Route::post('/criar-livro', [LivrosController::class, 'criar']);
    Route::post('/excluir-livro', [LivrosController::class, 'excluir']);
    Route::post('/editar-livro', [LivrosController::class, 'editar']);
});