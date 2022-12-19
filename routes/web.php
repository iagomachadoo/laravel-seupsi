<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\SiteController::class, 'index'])->name('index');
Route::get('/quem-sou', [App\Http\Controllers\SiteController::class, 'quemSou'])->name('quem-sou');
Route::get('/mensagens', [App\Http\Controllers\SiteController::class, 'mensagens'])->name('mensagens');
Route::post('/mensagens', [App\Http\Controllers\SiteController::class, 'mensagensPost'])->name('mensagens-post');
Route::get('/tema/{tema}', [App\Http\Controllers\SiteController::class, 'temasConteudos'])->name('tema');
//Route::get('/tema/{tema}/{conteudo}', [App\Http\Controllers\SiteController::class, 'conteudo'])->name('conteudo');
