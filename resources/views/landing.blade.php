@extends('layouts.auth')

@section('title', 'Home')

{{-- No specific body or main classes needed for the landing page --}}

@section('content')
    <section class="text-center py-20">
        <h1 class="text-5xl font-extrabold text-gray-900 mb-4">Monitor & Control Your IoT Devices</h1>
        <p class="text-xl text-gray-600 mb-8">Seamlessly connect your Arduino and other IoT devices to the cloud.</p>
        <a href="/register" class="bg-blue-600 hover:bg-blue-700 text-white text-lg px-8 py-4 rounded-lg shadow-lg">Get
            Started Free</a>
    </section>

    <section class="py-12 bg-white rounded-lg shadow-md mt-12">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Features</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-8">
            <div class="text-center">
                <div class="text-5xl text-blue-500 mb-4">💡</div>
                <h3 class="text-xl font-semibold mb-2">Real-time Monitoring</h3>
                <p class="text-gray-600">View sensor data and device status instantly.</p>
            </div>
            <div class="text-center">
                <div class="text-5xl text-green-500 mb-4">⚙️</div>
                <h3 class="text-xl font-semibold mb-2">Remote Control</h3>
                <p class="text-gray-600">Control your devices from anywhere in the world.</p>
            </div>
            <div class="text-center">
                <div class="text-5xl text-purple-500 mb-4">☁️</div>
                <h3 class="text-xl font-semibold mb-2">Cloud Connectivity</h3>
                <p class="text-gray-600">Secure and reliable connection to the cloud.</p>
            </div>
        </div>
    </section>
@endsection
