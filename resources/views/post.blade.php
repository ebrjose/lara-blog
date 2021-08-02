@extends('layouts.main')

@section('content')
    <article>
        <h1>
            {{ $post->title }}
        </h1>
        <p>
            {{ $post->description }}
        </p>
        <code>
            {{ $post->body }}
        </code>
    </article>
    <h3><a href="/">Go Back</a></h3>
@endsection
