@extends('layouts.main')
@section('title', 'Opini Kader | Komjensud')
@section('content')
    @include('partials.hero-section', [
        'text' => 'Opini Kader',
        'image' => asset('posts-hero.jpg'),
    ])


@endsection
