<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Repositories\ProdutosRepository;
use App\Produtos;

class ProdutosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Produtos::orderBy('created_at', 'desc');
        return view('home',['produtos' => $produtos]);
    }
  
    public function create()
    {
        return view('form');
    }
  
    public function store(Request $request)
    {
        $result = ProdutosRepository::save($request); 
        return redirect()->route('home')->with('message', $result['msg']);
    }

    public function edit($id)
    {
        $produtos = Produtos::where('produtos_id', $id)->get();
        $produto = $produtos[0]->getAttributes();
        return view('edit', compact('produto'));
    }

    public function baixa($id)
    {
        ProdutosRepository::baixarProduto($id);
        return redirect()->route('home')->with('message', 'Baixa  efetuada com sucesso');
    }
  
    public function update(ProductRequest $request, $id)
    {
        $product = Produtos::findOrFail($id);
        $product->nome        = $request->nome;
        $product->descricao = $request->descricao;
        $product->quantidade    = $request->quantidade;
        $product->status       = $request->status;
        $product->save();
        return redirect()->route('home')->with('message', 'Product updated successfully!');
    }
  
    public function destroy($id){
        $result = ProdutosRepository::remove($id);
        return redirect()->route('home');
    }
}
