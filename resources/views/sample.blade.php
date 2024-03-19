<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body>
    <!-- 올바르게 Livewire 컴포넌트를 선언합니다.
    <livewire:welcome />

    @livewireScripts -->

    @foreach ($data as $item)
        <p>{{ $item->name }}</p>
        <p>{{ $item->description }}</p>
        <p>{{ $item->votes }}</p>
    @endforeach
</body>
</html>
