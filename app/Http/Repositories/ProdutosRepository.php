<?php

namespace App\Http\Repositories;

use App\Http\Validations\ProdutosValidation;
use App\Produtos;

 class  ProdutosRepository
{

	public static function findAll(){
		return Produtos::all();
    }
    
    public static function save($request){

        $produtos = $request->all();
        $id;
        $result = ProdutosValidation::valida($produtos);

        if(!is_null($request->produto_id)){
            
            $product = Produtos::where('produtos_id', $request->produto_id)->first();
            $product->nome      = $request->nome;
            $product->descricao = $request->descricao;
            $product->quantidade   = $request->quantidade;

            $product->save();
        }else{
            if($result['status'] == 200){
                $prod = Produtos::orderBy('produtos_id', 'desc')->first();
                $id = $prod->getAttributes()['sku'];
                $id = (int) $id;
                $id++;
                $produtos['sku'] = $id;
                $produtos['states_id'] = 1;
                $produtos['quantidade'] = (int) $produtos['quantidade'];
                Produtos::create($produtos);
            }
        }
        return $result;
    }

    public static function remove($id){
        $product = Produtos::where('produtos_id', $id)->first();
        return $product->delete();
    }

    public static function baixarProduto($id){
        return Produtos::where('produtos_id', $id)->update(['states_id' => 2]);
    }

}