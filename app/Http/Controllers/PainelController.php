<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class PainelController extends Controller
{
    public function showPainel()
{

    $alunos = Aluno::all();

    return view('site.painel', compact('alunos'));
}
}
