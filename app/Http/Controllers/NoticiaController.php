<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function index()
    {
        $noticias = Noticia::with('user')->latest()->get();
        return view('noticias.index', compact('noticias'));
    }

    public function create()
    {
        return view('noticias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'conteudo' => 'required|string',
        ]);

        $request->user()->noticias()->create($request->all());
        return redirect()->route('noticias.index')->with('success', 'Notícia criada!');
    }

    public function edit(Noticia $noticia)
    {
        return view('noticias.edit', compact('noticia'));
    }

    public function update(Request $request, Noticia $noticia)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'conteudo' => 'required|string',
        ]);

        $noticia->update($request->all());
        return redirect()->route('noticias.index')->with('success', 'Notícia atualizada!');
    }

    public function destroy(Noticia $noticia)
    {
        $noticia->delete();
        return redirect()->route('noticias.index')->with('success', 'Notícia excluída!');
    }
}