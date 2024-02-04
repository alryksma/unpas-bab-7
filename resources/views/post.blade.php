{{-- @dd($post); --}}

@extends('layouts.main')

@section('container')
    <article>
        <h2 class='mb-5'>{{ $post->title }}</h2>  
        <p>{{ $post->excerpt }}</p>
        {!! $post->body !!} {{-- ini ngebuat tag p tereksekusi --}}
    </article>
    
    <a href="/blog">balik</a>
@endsection