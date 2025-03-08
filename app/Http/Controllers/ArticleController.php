<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('articles', compact('articles'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        // store the article
        $filables = $request->validate([
            'titre' => 'required|string|min:10|max:255',
            'contenu' => 'required|string|min:100',
            'description' => 'string',
        ]);

        // store the article
        $article = Article::create($filables);

        return redirect()->route('articles.index')->with('success', 'Article créé avec succès');
    }
}
