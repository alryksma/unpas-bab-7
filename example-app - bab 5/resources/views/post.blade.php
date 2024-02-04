{{-- @dd($post); --}}

@extends('layouts.main')

@section('container')
    <article>
        <h2 class='mb-5'>{{ $post['title'] }}</h2>   
        {{-- <h2 class='mb-5'>{{ $post['title'] }}</h2>    --}}
        {{-- <h2 >author</h2>    --}}
        <h2 >{{ $post['author'] }}</h2>   
        {{-- <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Perspiciatis, eos debitis blanditiis velit laborum laudantium et tenetur atque non, sequi 
            earum maiores modi sit aliquam officiis, explicabo inventore quis. Voluptates.

        </p> --}}
        <p>{{ $post['body'] }}</p>
    </article>
    
    <a href="/blog">balik</a>
@endsection