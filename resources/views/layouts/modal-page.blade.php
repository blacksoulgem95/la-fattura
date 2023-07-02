<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="sofia">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased min-h-screen min-w-full">
<div class="h-full min-w-full">
    @include('layouts.navigation')

    {{--            <!-- Page Heading -->--}}
    {{--            @if (isset($header))--}}
    {{--                <header class="bg-white shadow">--}}
    {{--                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">--}}
    {{--                        {{ $header }}--}}
    {{--                    </div>--}}
    {{--                </header>--}}
    {{--            @endif--}}

    <!-- Page Content -->
    <main class="container min-w-full h-full py-10 px-10 flex justify-center items-center">
        <div class="card w-96 bg-base-300 shadow-xl">
            <div class="card-body">
                {{ $slot }}
            </div>
        </div>

    </main>
</div>
@include('layouts.footer')
</body>
</html>
