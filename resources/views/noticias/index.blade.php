@extends('layouts.app')

@section('content')
<h1>Notícias</h1>
<a href="{{ route('noticias.create') }}">Nova Notícia</a>

<ul>
@foreach ($noticias as $noticia)
    <li>
        <strong>{{ $noticia->titulo }}</strong> - {{ $noticia->user->name }}
        <a href="{{ route('noticias.edit', $noticia) }}">Editar</a>
        <form action="{{ route('noticias.destroy', $noticia) }}" method="POST" style="display:inline;">
            @csrf @method('DELETE')
            <button type="submit">Excluir</button>
        </form>
    </li>
@endforeach
</ul>
@endsection
