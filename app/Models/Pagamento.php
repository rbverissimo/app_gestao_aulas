<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Pagamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'valor',
        'dataPagamento',
        'referencia',
        'idFormaPagamento'
    ];

    public function formaPagamento(): HasOne {
        return $this->hasOne(FormaPagamento::class, 'idFormaPagamento');
    }


}
