@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
    <h2>Bienvenue sur la page d’accueil</h2>

    @forelse ($articles as $article)
        <x-article
            title="{{ $article['title'] }}"
            description="{{ $article['description'] }}"
        />
    @empty
        <p>Aucun article disponible.</p>
    @endforelse
    
@endsection
