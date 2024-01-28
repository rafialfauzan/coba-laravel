@extends('layouts.main')
@section('isi')
    <h1>Post Category : {{ $category }}</h1><br>
    @foreach ($posts as $post)
    <article class="mb-5">
        <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
        <p>{{ $post->exerpt }}</p>
    </article>
    @endforeach
@endsection