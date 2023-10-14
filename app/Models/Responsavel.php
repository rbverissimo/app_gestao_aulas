<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Responsavel extends Model
{
    use HasFactory;

    protected int $id;
    protected string $nome;
    protected string $telefone;
    protected string $endereco;
    protected string $parentesco;

    public $fillable = [
        'nome',
        'telefone',
        'endereco',
        'parentesco'
    ];
}
