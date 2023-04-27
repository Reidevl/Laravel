{{-- @extends('layouts.app')

@section('title', 'Blog')


@section('content')
    <h1>Personal blog</h1>
@endsection --}}


<x-layouts.app title="Blog" meta-description="Blog meta description">

    <h1>Personal blog</h1>
    {{-- @dump($posts) --}}
    @foreach ($posts as $post)
    <h2> {{ $post->title }} </h2>
    @endforeach
</x-layouts.app>
