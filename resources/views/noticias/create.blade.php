@extends('layouts.app')

@section('content')
<h1>Criar Notícia</h1>
<form action="{{ route('noticias.store') }}" method="POST">
    @csrf
    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo">

    <label for="conteudo">Conteúdo</label>
    <textarea name="conteudo" id="conteudo"></textarea>

    <button type="submit">Salvar</button>
</form>
@endsection
