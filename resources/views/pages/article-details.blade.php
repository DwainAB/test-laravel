@extends('layouts.app')

@section('title', 'Article ' . $id)

@section('content')
    <h2>Détails de l’article</h2>
    <p>Article portant l’identifiant {{ $id }}</p>
@endsection
