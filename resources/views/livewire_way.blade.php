<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokemon Livewire Way</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @livewireStyles
</head>
<body class="w-full bg-indigo-50">
    @include('components.nav')
    @livewire('post.search')
    @include('components.footer', ['brand' => 'alabson.inc'])
    @livewireScripts
</body>
</html>
