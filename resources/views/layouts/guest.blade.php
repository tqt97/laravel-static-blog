<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased" x-cloak x-data="{ darkMode: $persist(false) }"
    :class="{ 'dark': darkMode === true }">
    {{-- <div class="absolute left-0 top-0 -z-10 h-full w-full">
        <img alt="bg" loading="lazy" width="1920" height="1036" decoding="async" data-nimg="1"
            class="absolute left-0 top-0 -z-10 h-[99%] w-full" src="{{ asset('assets/images/hero-default.webp') }}"
            style="color: transparent;">
        <div class="absolute left-0 top-0 -z-10 h-full w-full bg-gradient-to-b from-transparent to-gray">
        </div>
    </div> --}}
    @include('layouts.partials.nav')

    <main class="">
        {{ $slot }}
    </main>
    {{-- @include('layouts.partials.footer') --}}
</body>

</html>
