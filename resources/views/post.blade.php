@extends('layouts.main')
@section('isi')
    <article>
        <h2>Judul: {{ $post->title }}</h2>
        {!! $post->body !!}
    </article>
    <a href="/blog">Kembali</a>
@endsection