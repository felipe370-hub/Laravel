@extends('layouts.app')

@section('content')
<h1>Editar Notícia</h1>
<form action="{{ route('noticias.update', $noticia) }}" method="POST">
    @csrf @method('PUT')
    <label for="titulo">Título</label>
    <input type="text" name="titulo" id="titulo" value="{{ $noticia->titulo }}">

    <label for="conteudo">Conteúdo</label>
    <textarea name="conteudo" id="conteudo">{{ $noticia->conteudo }}</textarea>

    <button type="submit">Atualizar</button>
</form>
@endsection
