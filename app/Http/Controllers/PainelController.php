<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class PainelController extends Controller
{
    public function showPainel()
{
    $mockAluno = new Aluno([
        'nome'=>'PORRA DE TESTE DEU CERTO CARALHO VAI SE FUDER', 
        'telefone'=>'(64) 00000-9999'
    ]);

    return view('site.painel', compact('mockAluno'));
}
}
