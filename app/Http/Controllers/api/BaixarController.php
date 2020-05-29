<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\ProdutosRepository;

class BaixarController extends Controller
{
    public function update($id){
        return ProdutosRepository::baixarProduto($id);
    }
}
