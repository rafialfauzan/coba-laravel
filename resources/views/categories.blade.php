@extends('layouts.main')
@section('isi')
    <h1>Post Categories</h1><br>
    @foreach ($categories as $category)
    <article class="mb-5">
        <ul>
            <li>
                <h2><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h2>
            </li>
        </ul>
    </article>
    @endforeach
@endsection