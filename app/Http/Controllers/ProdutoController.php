<?php

namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use estoque\Produto;
use Request;

class ProdutoController extends Controller {

    public function lista() {

        $produtos = DB::select('select * from produtos');

        return view('produto/produtos-listagem')->with('produtos', $produtos);

        //return view('produtos-listagem')->withProdutos($produtos);
    }

    public function mostra($id) {
        
        $key = DB::select('select * from produtos where id=?', [$id]);

        if (empty($key)) {
            return "Esse produto não existe!";
        } else {
            return view('produto/detalhes')->with('p',$key[0]);
        }
    }

}
