<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    protected $id;
    protected $nome;
    protected $cpf;
    protected $celular;
    protected $idResponsavel;

    protected $fillable = ['nome', 'cpf', 'celular', 'idResponsavel'];

    
}