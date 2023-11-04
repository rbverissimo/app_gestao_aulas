<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Aluno extends Model
{
    use HasFactory;

    protected $id;
    protected $nome;
    protected $cpf;
    protected $celular;
    protected $idResponsavel;

    protected $fillable = [
        'id',
        'nome', 
        'cpf', 
        'celular', 
        'idResponsavel'];

    public function responsaveis(): HasMany {
        return $this->hasMany(Responsavel::class, 'idResponsavel');
    }
    
}