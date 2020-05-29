<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    protected $fillable = [
        'nome','states_id', 'sku', 'quanidade', 'descricao'
    ];

    protected $primaryKey = 'produtos_id';

}
