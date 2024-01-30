@extends('layouts.main')
@section('isi')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Judul: {{ $post->title }}</h2>
            <p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none text-dark">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-dark">{{ $post->category->name }}</a></p>
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mb-3" alt="{{ $post->category->name }}">
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
            <a href="/blog" class="text-decoration-none mt-3 mb-3 btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
       
        
@endsection