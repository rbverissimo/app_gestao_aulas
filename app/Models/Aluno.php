<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    use HasFactory;

    public $name;
    public $telefone;
    public $curso;
    public $horaAula;
    public $ultimaAula;

    protected $fillable = ['nome', 'curso', 'horaAula', 'ultimaAula'];
}
