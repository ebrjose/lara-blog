@extends('layouts.main')

@section('content')
    @foreach ($posts as $post)
    <article class="post-section">
        <h1>
            <a href="/posts/{{ $post->slug }}">
                {{ $post->title }}
            </a>
        </h1>
        <p>
            By <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>
            in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
        </p>
        <p>
            {{ $post->description }}
        </p>
    </article>
    @endforeach
@endsection
