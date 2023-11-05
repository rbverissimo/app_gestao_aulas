<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{

    public function showAulasPorId($studentId) {
        $aluno = Aluno::find($studentId);
        $aulasAluno = $aluno->aulas;
    }
}
