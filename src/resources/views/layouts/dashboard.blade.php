<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script>
        (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches))
        ?    document.documentElement.classList.add('dark')
        :    document.documentElement.classList.remove('dark');
    </script>
</head>
<body>
    <div class="min-h-screen font-sans antialiased text-gray-900 bg-gray-200 dark:text-gray-100 dark:bg-gray-800">
        <div x-data="{ sidebarOpen: false }" class="flex h-screen darkmode-smooth transform-opacity delay-100 ease-in">

            <div :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed z-20 inset-0 bg-black opacity-50 transition-opacity lg:hidden"></div>

            <div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'" class="fixed z-30 inset-y-0 left-0 w-64 transition duration-300 transform bg-gray-100 dark:bg-gray-900 overflow-y-auto lg:translate-x-0 lg:static lg:inset-0">
                <div class="flex items-center justify-start ml-1 p-1 transform-gpu transition-colors duration-1000 mb-1">
                    <a id="page-icon" href="{{ Route('home') }}" class="flex items-center h-10">
                        @if(!asset('/images/application-logo.png'))
                            <x-sk.application-logo class="h-8 w-8 text-gray-700 dark:text-gray-300 fill-current" />
                        @else
                            <img class="h-10 w-10 text-gray-700 dark:text-gray-300 bg-rose-900 rounded-full fill-current" src="{{ asset('/images/application-logo.png')}}"/>
                        @endif
                    </a>
                    <span class="text-gray-900 dark:text-gray-100 text-2xl mx-3 font-semibold">{{ config('app.name', 'Laravel') }}</span>
                </div>

                <x-sk.db-navigation/>
            </div>

            <div class="flex-1 flex flex-col overflow-auto bg-gray-200 dark:bg-gray-800 darkmode-smooth">

                <x-sk.db-header/>

                <main class="flex-1 overflow-x-hidden overflow-y-auto">
                    <div class="container mx-auto px-6 py-8 flex-col flex gap-6">
                        <h3 class="text-gray-800 dark:text-gray-200 text-3xl font-medium">
                            {{ $header }}
                        </h3>

                        {{ $slot }}
                    </div>
                </main>

            </div>

        </div>
    </div>
</body>
</html>
