@extends('_layouts.app')

@section('content')

    <h1>Blogs</h1>
    @foreach($posts as $post)
        <h2><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></h2>
        <p><a href="{{ route('authors.show', $post->user->id) }}">{{ $post->user->name }}</a></p>
        <p>{!! $post->body !!}</p>
    @endforeach

@stop
