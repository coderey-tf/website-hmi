@extends('layouts.main')
@section('title', 'Join Us | Komjensud')
@section('content')
    @include('partials.hero-section', [
        'text' => 'Join Us',
        'image' => asset('posts-hero.jpg'),
    ])


@endsection
