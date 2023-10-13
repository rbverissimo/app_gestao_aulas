<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PainelController;


Route::get('/', function () {
    return view('site.home');
});

Route::get('/painel', [PainelController::class, 'showPainel']);