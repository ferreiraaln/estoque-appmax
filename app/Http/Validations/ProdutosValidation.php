<?php

namespace App\Http\Validations;

use App\State;

 class  ProdutosValidation
{   
    
    public static function valida($produtos){

        // $st = State::where('states_id', $produtos['states_id'])->first();

        // if(is_null($st)){
        //     return array(
        //         "msg"=>"Status Inválido",
        //         "status" => 400
        //     );
        // }

        if(is_null($produtos['nome']) ){
            return array(
                "msg"=>"Campo nome é obrigatório",
                "status" => 400
            );
        }

        if(is_null($produtos['quantidade'])){
            return array(
                "msg"=>"Campo quantidade é obrigatório",
                "status" => 400
            );
        }

        return array(
            "msg"=>"Resgistro salvo com sucesso",
            "status" => 200
        );
    }
}