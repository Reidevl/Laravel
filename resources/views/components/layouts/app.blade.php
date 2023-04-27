<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplicacion - {{ $title ?? '' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Default meta description' }}" />

</head>

<body>

    <x-layouts.navigation />

    @if (session('status'))
        <div>{{ session('status') }}</div>
    @endif

    {{-- Aqui abajo va el contenido --}}
    {{ $slot }}

</body>

</html>
