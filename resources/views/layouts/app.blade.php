<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Blynk Dashboard')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js']) {{-- Pastikan app.js di-include --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
{{-- Alpine.js for sidebar toggle & theme logic --}}

<body x-data="{ sidebarOpen: false }" :class="{ 'overflow-hidden': sidebarOpen && window.innerWidth < 1024 }"
    class="bg-gray-100 font-sans antialiased dark:bg-gray-900 dark:text-gray-200">
    <script>
        // Theme logic: Apply theme on page load from localStorage or system preference
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
            // Pastikan tema diatur ke 'light' jika tidak 'dark' dan tidak ada preferensi sistem 'dark'
            localStorage.setItem('theme', 'light');
        }
    </script>

    <div class="flex h-screen bg-gray-100 dark:bg-gray-900">
        <div x-show="sidebarOpen || window.innerWidth >= 1024" {{-- Show if sidebarOpen or on large screens --}}
            x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="-translate-x-full"
            x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in duration-300 transform"
            x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full"
            class="fixed inset-y-0 left-0 z-50 w-64 bg-gray-800 text-white flex-shrink-0 flex flex-col lg:static lg:translate-x-0 lg:flex-shrink-0 dark:bg-gray-800">
            @include('partials.sidebar')
        </div>
        <div x-show="sidebarOpen && window.innerWidth < 1024" @click="sidebarOpen = false"
            class="fixed inset-0 z-40 bg-black opacity-50"></div>


        <div class="flex-1 flex flex-col overflow-hidden">
            @include('partials.header')

            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100 p-6 dark:bg-gray-900">
                @yield('content')
            </main>

            @include('partials.footer')
        </div>
    </div>
</body>

</html>
