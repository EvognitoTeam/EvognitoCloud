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
    <header class="fixed top-0 left-0 w-full bg-gray-950 z-50 shadow-md">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold gradient-text">Evognito Cloud</h1>

            <!-- Hamburger -->
            <div class="md:hidden">
                <button id="nav-toggle" class="text-white focus:outline-none">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>

            <!-- Menu -->
            <nav id="nav-menu"
                class="hidden md:flex md:items-center md:space-x-6 absolute md:static bg-gray-950 md:bg-transparent left-0 top-full w-full md:w-auto px-6 md:px-0 py-4 md:py-0">
                <a href="{{ route('landing') }}" class="block py-2 md:py-0 hover:text-teal-400 transition">Home</a>
                <a href="{{ route('about') }}" class="block py-2 md:py-0 hover:text-teal-400 transition">About Us</a>
                <a href="{{ route('login') }}" class="block py-2 md:py-0 hover:text-teal-400 transition">Login</a>
                <a href="{{ route('register') }}" class="block py-2 md:py-0 hover:text-teal-400 transition">Register</a>
                {{-- <a href="{{ route('docs.index') }}" class="block py-2 md:py-0 hover:text-teal-400 transition">Docs</a> --}}
            </nav>
        </div>
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
