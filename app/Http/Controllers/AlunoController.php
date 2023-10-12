<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;

class AlunoController extends Controller
{
    public function getAFewMocks() {

        $aluno1 = new Aluno(['name' => 'Mock Aluno Teste', 'telefone' => '(62) 99987-9800']);
        $aluno2 = new Aluno(['name' => 'Aluno Aluno Lorem', 'telefone' => '(62) 99432-9590']);

        $fewMocks = [$aluno1, $aluno2];

        return view();

    }

    public function getAMock() {

        $aAlunoMock = new Aluno(['name' => 'Mock Único', 'telefone' => '(64) 993456-0023']);

        return view('components.aluno', ['aAlunoMock'=>$aAlunoMock]);
    }

}
