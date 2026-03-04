<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'My Blog')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet"/>

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else

    @endif
{{--    @if (file_exists(public_path('hot')))--}}
{{--        @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
{{--    @endif--}}
</head>
<body class="w-screen h-screen">
@include('front.partials.header')

<main class="min-h-screen max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-16">
    @yield('content')

</main>

<footer class="h-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-4">
    &copy; {{ date('Y') }} My Blog
</footer>

</body>
</html>
