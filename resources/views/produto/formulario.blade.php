@extends('layout/principal')

@section('conteudo')

<form action="/produtos/adiciona" method='post'>
    <input type="hidden" name="_token" value='{{ csrf_token() }}'>
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" id="nome" name="nome" class="form-control">
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input type="text" id="descricao" name="descricao" class="form-control">
    </div>
    <div class="form-group">
        <label for="valor">Valor</label>
        <input type="number" id="valor" name="valor" class="form-control">
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="number" id="quantidade" name="quantidade" class="form-control">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
        <input type="reset" value="Limpar" class="form-control">
    </div>
</form>

@stop
