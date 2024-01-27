@extends('layouts.main')
@section('isi')
    <h1>Halaman Post</h1><br>
    @foreach ($posts as $post)
    <article class="mb-5">
        <h2><a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a></h2>
        <h5>by: {{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>
    @endforeach
@endsection