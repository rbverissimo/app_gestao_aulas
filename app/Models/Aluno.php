<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    public string $nome;
    public string $cpf;
    public string $celular;
    public int $idResponsavel;

    protected $fillable = [ 'id', 'nome', 'cpf', 'celular', 'idResponsavel'];
}
