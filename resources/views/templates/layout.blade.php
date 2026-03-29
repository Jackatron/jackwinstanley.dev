<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <meta name="description" content="{{ __('common.meta_description') }}">
        <link rel="preconnect" href="https://challenges.cloudflare.com">
        <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="">
        @include('includes.header')
        <main role="main">
            @yield('content')
        </main>
        @include('includes.footer')
        @include('includes.svg-sprite')
    </body>
</html>
