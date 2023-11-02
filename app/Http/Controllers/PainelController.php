<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class PainelController extends Controller
{
    public function showPainel()
{
    $mockAluno1 = new Aluno([
        'nome'=>'Teste do Teste',
        'celular'=>'62 98756-9076',
        'cpf'=> '031.452.333-23'
    ]);

        $mockAluno2 = new Aluno([
        'nome'=>'Mock do Mock',
        'celular'=>'62 99052-4341',
        'cpf'=> '770.346.332-20'
    ]);

        $mockAluno3 = new Aluno([
        'nome'=>'Teste do Mock',
        'celular'=>'62 9076-9905',
        'cpf'=> '888.346.452-20'
    ]);

    $mocks=[$mockAluno1, $mockAluno2, $mockAluno3];

    return view('site.painel', compact('mocks'));
}
}
