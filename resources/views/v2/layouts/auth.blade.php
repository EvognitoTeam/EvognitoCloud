<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Evognito Cloud') - Evognito Cloud</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans antialiased @yield('body_classes')">

    {{-- Header: Always present for auth layout --}}
    <header class="bg-white shadow-md">
        <nav class="container mx-auto px-6 py-3 flex justify-between items-center">
            <div class="text-2xl font-bold text-gray-800">Evognito Cloud</div>
            <div>
                <a href="{{ route('landing') }}" class="text-gray-800 hover:text-blue-600 mx-3">Home</a>
                <a href="{{ route('about') }}" class="text-gray-800 hover:text-blue-600 mx-3">About Us</a>
                <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800 mx-3">Login</a>
                <a href="{{ route('register') }}"
                    class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-md">Register</a>
            </div>
        </nav>
    </header>

    <main class="@yield('main_classes', 'container mx-auto px-6 py-8')">
        @yield('content')
    </main>

    {{-- Footer Section (Optional: only shown if child page explicitly defines it) --}}
    @hasSection('footer')
        @yield('footer')
    @else
        {{-- Default footer only for pages that don't explicitly hide it --}}
        <footer class="bg-gray-800 text-white py-6 mt-12">
            <div class="container mx-auto text-center">
                &copy; 2025 Evognito Cloud. All rights reserved.
            </div>
        </footer>
    @endif

</body>

</html>
