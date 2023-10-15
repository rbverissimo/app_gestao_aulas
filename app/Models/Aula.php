<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aula extends Model
{
    use HasFactory;

    protected $id;
    protected $idAluno;
    protected $dataAula;
    protected $idPagamento;
    protected $descricao;
    protected $valorAula;
    protected $referenciaAula;
    protected $idProfessor; 

    protected $fillable = [
        'idAluno',
        'dataAula',
        'idPagamento',
        'descricao',
        'valorAula',
        'referenciaAula',
        'idProfessor',
    ];
}
