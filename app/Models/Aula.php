<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

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

    public function aluno(): BelongsTo {
        return $this->belongsTo(Aluno::class, 'idAluno');
    }

    public function pagamento(): HasOne {
        return $this->hasOne(Pagamento::class, 'idPagamento');
    }
}
