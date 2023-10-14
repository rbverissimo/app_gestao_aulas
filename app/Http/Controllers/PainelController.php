<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class PainelController extends Controller
{
    public function showPainel()
{
    $mockAluno = new Aluno([
        'nome'=>'Jorge Pinchemel', 
        'curso'=> 'Aulas de Guitarra',
        'horaAula'=>'R$70',
        'ultimaAula'=>'12-08-2023'
    ]);

    return view('site.painel', compact('mockAluno'));
}
}
