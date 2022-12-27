@extends('layouts.main')
@section('title', 'Galeri Foto | Komjensud')
@section('content')
    @include('partials.hero-section', [
        'text' => 'Galeri Foto',
        'image' => asset('posts-hero.jpg'),
    ])


@endsection
