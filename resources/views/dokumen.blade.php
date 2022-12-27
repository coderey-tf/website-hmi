@extends('layouts.main')
@section('title', 'Dokumen | Komjensud')
@section('content')
    @include('partials.hero-section', [
        'text' => 'Dokumen',
        'image' => asset('posts-hero.jpg'),
    ])


@endsection
