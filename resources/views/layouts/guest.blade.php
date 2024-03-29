<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('', 'Kedai Es Em') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    @include('components.navbar-landing')
    <div class=' bg-red-900 flex justify-center items-center'>
        <div class="min-h-screen flex flex-col sm:justify-center items-center">

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white rounded-lg shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
</body>

</html>
