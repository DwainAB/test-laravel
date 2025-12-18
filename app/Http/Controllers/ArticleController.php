<?php

namespace App\Http\Controllers;

use App\Models\Article;

class ArticleController extends Controller
{
    public function create()
    {
        Article::insert([
            [
                'title' => 'L’IA soigne mieux',
                'description' => 'L’intelligence artificielle aide les médecins à diagnostiquer plus vite.'
            ],
            [
                'title' => 'Villes vertes',
                'description' => 'Les métropoles deviennent plus écologiques et durables.'
            ],
            [
                'title' => 'Télétravail',
                'description' => 'Plus de liberté, mais aussi plus de solitude.'
            ],
        ]);

        return 'Articles ajoutés';
    }

    public function update($id)
    {
        $article = Article::findOrFail($id);

        $article->update([
            'title' => 'Titre modifié',
            'description' => 'Description modifiée'
        ]);

        return 'Article modifié';
    }

    public function delete($id)
    {
        Article::findOrFail($id)->delete();

        return 'Article supprimé';
    }

    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('pages.article-details', [
            'article' => $article
        ]);
    }
}
