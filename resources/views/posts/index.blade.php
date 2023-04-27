{{-- @extends('layouts.app')

@section('title', 'Blog')


@section('content')
    <h1>Personal blog</h1>
@endsection --}}


<x-layouts.app
    title="Blog"
    meta-description="Blog meta description"
>
    <h1>Personal blog</h1>
    <a href="{{ route('posts.create') }}">Crear new post</a>
    @foreach ($posts as $post)
        <h2>
            <a href="{{ route('posts.show', $post) }}">
                {{ $post->title }}
            </a>
        </h2>
    @endforeach
</x-layouts.app>
