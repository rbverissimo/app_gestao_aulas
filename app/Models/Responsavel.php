<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
    use HasFactory;
    
    protected $table = 'responsaveis';

    protected $id;
    protected $nome;
    protected $telefone;
    protected $endereco;
    protected $parentesco;

    public $fillable = [
        'nome',
        'telefone',
        'endereco',
        'parentesco'
    ];
}
