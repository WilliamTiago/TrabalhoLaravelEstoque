@extends('layout/principal')

@section('conteudo')

@if(empty($produtos))

<div class='alert alert-danger'>
    <p>Você não tem nehum produto cadastrado!</p>
</div>

@else

<h1>Listagem de produtos</h1>
<table class="table table-bordered">
    <tr>
        <td><b>Nome</b></td>
        <td><b>Descrição</b></td>
        <td><b>Valor</b></td>
        <td><b>Quantidade</b></td>
        <td><b>*</b></td>
    </tr>   

    @foreach ($produtos as $p) 
    <tr class="{{$p->quantidade<=1?'danger':''}}">
        <td>{{ $p->nome }}</td>
        <td>{{ $p->descricao }}</td>
        <td>{{ $p->valor }}</td>
        <td>{{ $p->quantidade }}</td>
        <td>
            <a href="/produtos/mostra/{{ $p->id }}">
                <span class="glyphicon glyphicon-search"></span>Visualizar
            </a>
        </td>

    </tr>
    @endforeach
</table>

@endif

<h4>
    <span class="label label-danger pull-right">
        Um ou menos itens no estoque
    </span>    
</h4>
@stop