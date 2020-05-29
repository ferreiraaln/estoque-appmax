<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Repositories\ProdutosRepository;

class AdcionarController extends Controller
{

    public function index(){
        $result = ProdutosRepository::findAll();
    }

    public function store(Request $request){
        $result = ProdutosRepository::save($request);
        return response($result['msg'], $result['status'])->header('Content-Type', 'text/plain');
    }
}
