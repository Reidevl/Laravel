{{-- @extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Inicio</h1>
@endsection --}}

{{-- @component('components.layout')
    <h1>Home</h1>
@endcomponent --}}
{{-- Lo de abajo es equivalente al component ^ --}}

<x-layouts.app
    title="Home"
    meta-description="Home meta description">

    <h1>Home</h1>
</x-layouts.app>
