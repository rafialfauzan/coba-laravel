@extends('layouts.main')
@section('isi')
    <article>
        <h2>Judul: {{ $post->title }}</h2>
        <p>By. Rafi Fauzan in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        {!! $post->body !!}
    </article>
    <a href="/blog">Kembali</a>
@endsection