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
            return view('produto/detalhes')->with('p', $key[0]);
        }
    }

    public function novo() {
        return view('produto/formulario');
    }

    public function adiciona(){
        $nome = Request::input('nome');
        $descricao = Request::input('descricao');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');
        
        //DB::insert('insert into produtos(nome, quantidade, valor, descricao) values (?,?,?,?)',
        //array($nome, $quantidade,$valor, $descricao));
        //return implode(', ',array($nome,$descricao,$valor,$quantidade));
        
        DB::table('produtos')->insert(
                ['nome' => $nome,
                 'valor' => $valor,
                 'descricao' => $descricao,
                 'quantidade' => $quantidade]
                );
        
        return view('produto/adicionado')->with('nome', $nome);
    }
}
