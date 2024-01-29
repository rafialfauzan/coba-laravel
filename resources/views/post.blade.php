@extends('layouts.main')
@section('isi')
    <article>
        <h2>Judul: {{ $post->title }}</h2>
        <p>By. <a href="#" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
    <a href="/blog" class="text-decoration-none d-block mt-3">Kembali</a>
@endsection