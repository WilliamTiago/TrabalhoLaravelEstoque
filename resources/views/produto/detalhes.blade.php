@extends('layout/principal')

@section('conteudo')

<h1>Detalhe do produto: {{ $p->nome }}</h1>
<ul>
    <li><b>Descição:</b> {{ $p->descricao }}</li>
    <li><b>Quantidade:</b> {{ $p->quantidade }}</li>
    <li><b>Valor:</b> {{ $p->valor }}</li>
</ul>   

@stop