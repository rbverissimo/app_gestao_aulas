<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class PainelController extends Controller
{
    public function showPainel()
{
    $mockAluno = new Aluno([
        'nome'=>'Jorge Pinchemel'
    ]);

    return view('site.painel', compact('mockAluno'));
}
}
