@extends('front.base')

@section('title', 'Post')

@section('content')
    <!-- Nadpis článku -->
    <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $translation->title }}</h1>

    <!-- Autor a datum -->
    <p class="text-sm text-gray-500 mb-8">
        26.2.2026 &bull; Jan Svoboda &bull; @include('front.partials.post-locale-switch')
    </p>

    <!-- Obsah článku -->
    <article class="space-y-6 text-gray-700">
        <p>
            {{$translation->content}}
        </p>
    </article>

@endsection
