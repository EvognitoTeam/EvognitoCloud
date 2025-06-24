<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Evognito Cloud</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .gradient-text {
            background: linear-gradient(to right, #06b6d4, #3b82f6);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body class="bg-gray-900 text-white">

    <!-- Navbar -->
    @extends('v2.partials.header')

    <!-- Hero Section -->
    <section
        class="min-h-screen flex items-center justify-center text-center px-6 bg-gradient-to-br from-teal-500 to-indigo-700 pt-32">
        <div data-aos="zoom-in">
            <h1 class="text-4xl md:text-6xl font-bold mb-4">Monitor & Control <span class="gradient-text">Your
                    Devices</span></h1>
            <p class="text-lg md:text-xl mb-6 text-gray-100">Real-time IoT monitoring platform for ESP32 and smart
                devices</p>
            <a href="#"
                class="bg-white text-gray-900 px-6 py-3 rounded-full font-semibold hover:bg-gray-100 transition">Get
                Started</a>
        </div>
    </section>

    <!-- Features -->
    <section class="py-20 bg-gray-900">
        <div class="container mx-auto px-6">
            <h2 class="text-3xl font-bold text-center mb-12" data-aos="fade-up">Why Choose Evognito?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div class="bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-xl transition" data-aos="fade-up"
                    data-aos-delay="100">
                    <h3 class="text-xl font-semibold text-teal-300 mb-3">Realtime Monitoring</h3>
                    <p>Get live updates from your sensors and relays instantly across the globe.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-xl transition" data-aos="fade-up"
                    data-aos-delay="200">
                    <h3 class="text-xl font-semibold text-teal-300 mb-3">Easy Setup</h3>
                    <p>Simple API integration with ESP32 or Arduino. Connect in minutes.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-lg shadow-md hover:shadow-xl transition" data-aos="fade-up"
                    data-aos-delay="300">
                    <h3 class="text-xl font-semibold text-teal-300 mb-3">Custom Rules</h3>
                    <p>Automate your devices with custom triggers, timers, and logic flows.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 bg-gradient-to-r from-indigo-700 to-teal-500 text-center">
        <h2 class="text-4xl font-bold mb-4" data-aos="fade-up">Start Building with Evognito Cloud</h2>
        <p class="mb-6 text-lg text-gray-100" data-aos="fade-up" data-aos-delay="100">Connect, monitor, and automate –
            all in one place</p>
        <a href="{{ route('dashboard') }}"
            class="bg-white text-gray-900 px-8 py-3 rounded-full font-semibold hover:bg-gray-200 transition"
            data-aos="zoom-in" data-aos-delay="200">Launch Dashboard</a>
    </section>

    @extends('v2.partials.footer')

    <!-- AOS Init -->
    <script>
        AOS.init({
            duration: 800,
            once: true
        });

        // Toggle menu on mobile
        const navToggle = document.getElementById('nav-toggle');
        const navMenu = document.getElementById('nav-menu');

        navToggle.addEventListener('click', () => {
            navMenu.classList.toggle('hidden');
        });
    </script>
</body>

</html>
