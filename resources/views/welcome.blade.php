<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')


    </head>
    <body class="antialiased">
        @livewire('clicker')
        {{-- <livewire:clicker/> --}}
        @livewire('userlist')
    </body>
</html>
