<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ session('theme') !== 'dark' ? 'dark' : '' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">



        {{-- SEO --}}
        <title>@yield('title', 'Pablo Eliézer')</title>
        <meta name="description" content="@yield('meta_description', 'Tutoriais, dicas e artigos sobre tecnologia, desenvolvimento web, programação e mais.')">

        {{-- Open Graph --}}
        <meta property="og:title" content="@yield('title', 'Meu Site de Tecnologia')">
        <meta property="og:description" content="@yield('meta_description', 'Tutoriais, dicas e artigos sobre tecnologia, desenvolvimento web, programação e mais.')">
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:image" content="@yield('meta_image', asset('images/default-og.jpg'))">

        {{-- Twitter Card --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="@yield('title', 'Meu Site de Tecnologia')">
        <meta name="twitter:description" content="@yield('meta_description', 'Tutoriais, dicas e artigos sobre tecnologia, desenvolvimento web, programação e mais.')">
        <meta name="twitter:image" content="@yield('meta_image', asset('images/default-og.jpg'))">

{{--        <title>@yield('title', 'Pablo Eliézer')</title>--}}

{{--        <meta name="description" content="@yield('meta_description', 'Personal website of Pablo Eliézer')">--}}

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    </head>
    <body class="font-sans antialiased" x-data="" x-cloak>
        <div class="min-h-screen overflow-y-auto bg-gray-100 dark:bg-gray-900">
            <div class="max-w-7xl mx-auto">
                <x-dashboard.header.index />

                <!-- Page Content -->
                <main class="border border-gray-200 dark:border-gray-800 rounded-xl p-6 mb-10">
                    {{ $slot }}
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
