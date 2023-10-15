<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PainelController;


Route::redirect('/', '/home', 302);

Route::get('/home', [HomeController::class, 'showHome'])->name('site.home');

Route::get('/painel', [PainelController::class, 'showPainel'])->name('site.painel');

Route::fallback(function(){
    echo 'URL não encontrada :( <br/> <a href="'.route('site.home').'">Retornar à Home</a>';
});