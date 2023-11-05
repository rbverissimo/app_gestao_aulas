<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Aula;

class PainelController extends Controller
{
    public function showPainel()
{

    $alunos = Aluno::all();
    $aulas = Aula::all();

    return view('site.painel', compact('alunos', 'aulas'));
}
}
