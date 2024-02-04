@extends('dashboard.layouts.main')
@section('container')
<div class="container">
    <div class="row ">
        <div class="col-lg-8">
            <h2>Judul: {{ $post->title }}</h2>
            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left"></i> Back to MyPost</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Edit</a>
            {{-- <a href="" class="btn btn-danger"><i class="bi bi-trash"></i> Hapus</a> --}}
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><i class="bi bi-trash"></i> Delete</button>
            </form>

            @if ($post->image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/'.$post->image) }}" class="img-fluid mb-3 mt-3" alt="{{ $post->category->name }}">
            </div>
            @else  
            <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mb-3 mt-3" alt="{{ $post->category->name }}">
            @endif
            
            
            <article class="my-3 fs-5">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection