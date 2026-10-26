<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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
        
        <script async src="//www.instagram.com/embed.js"></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen" style="background:#fbfcfc;">
            <x-navbar
                :brand-href="route('dashboard')"
                :items="[
                    ['href' => route('dashboard'), 'label' => 'Dasbor', 'active' => request()->routeIs('dashboard')],
                    ['href' => route('admin.paket.index'), 'label' => 'Paket Umroh', 'active' => request()->routeIs('admin.paket.*')],
                    ['href' => route('admin.testimoni.index'), 'label' => 'Video Testimoni', 'active' => request()->routeIs('admin.testimoni.*')],
                ]"
            >
                <x-slot:action>
                    <button
                        type="submit"
                        class="button button--danger lg:p-6"
                        form="logout"
                    >
                        Keluar
                    </button>
                    <form id="logout" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </x-slot:action>
            </x-navbar>

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
