<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controle;
use App\Http\Controllers\AppController;

Route::get('/' , [AppController::class,'home']);
Route::get('/sobre',[AppController::class, 'sobre']);
Route::get('/produtos' , [AppController::class,'produtos']);
 
//formulario de cadastro de produto
Route::get('/frmproduto' , [AppController::class,'frmproduto']);
Route::post('/addproduto' , [AppController::class,'addproduto']);
 
//Formulario de cadastro de usuario
Route::get('/frmusuario', [AppController::class, 'frmusuario']);
 
//cadastro do usuario
Route::post('/addusuario', [AppController::class, 'addusuario']);
Route::get('usuarios', [AppController::class, 'usuarios']);
 
Route::get('/frmeditusuario/{id}', [AppController::class, 'frmeditusuario']);
 
//atualizar usuario
Route::put('/atualizarusuario/{id}', [AppController::class, 'atualizarusuario']);
 
//excluir usuario
Route::delete('/excluirusuario/{id}', [AppController::class, 'excluirusuario']);
 
Route::get('/frmprodutoslist', [AppController::class, 'frmprodutoslist']);
 
//atualizar produto
Route::get('/frmeditproduto/{id}', [AppController::class, 'frmeditproduto']);
 
//excluir produto
Route::delete('/excluirproduto/{id}', [AppController::class, 'excluirproduto']);
 
Route::get('/frmcontatolist', [AppController::class, 'frmcontatolist']);
//responder contato
Route::get('/respondercontato/{id}', [AppController::class, 'respondercontato']);
//excluircontato
Route::delete('/excluircontato/{id}', [AppController::class, 'excluircontato']);
 
//exibe o formulário
Route::get('/contato', [AppController::class, 'contato']);
//processar envio do contato
Route::post('/contato', [AppController::class, 'enviarContato']);
 
//dashboard
Route::get('/dashboard', [AppController::class, 'dashboard']);
 
//rotas de login
 
Route::get('/frmlogin', [AppController::class, 'frmlogin'])->name('login');
Route::post('/logar', [AppController::class, 'logar']);
Route::get('/logout', [AppController::class, 'logout']);
 
?>
