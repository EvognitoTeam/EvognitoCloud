@extends('layouts.auth')

@section('title', 'About Us')

{{-- No specific body or main classes needed for the about us page --}}

@section('content')
    <section class="bg-white rounded-lg shadow-md p-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-6 text-center">About Us</h1>
        <p class="text-lg text-gray-700 mb-4">
            Welcome to Evognito Cloud Dashboard, your ultimate solution for monitoring and controlling IoT devices.
            We provide a user-friendly platform that seamlessly connects your hardware to the cloud,
            allowing you to manage your projects from anywhere in the world.
        </p>
        <p class="text-lg text-gray-700 mb-4">
            Our mission is to empower makers, developers, and businesses to build innovative IoT solutions
            with ease. We believe in providing robust, scalable, and secure infrastructure
            that simplifies the complexities of IoT development.
        </p>
        <p class="text-lg text-gray-700">
            Whether you're working on a home automation project, an industrial monitoring system, or anything in between,
            Blynk Dashboard is here to help you bring your ideas to life.
        </p>
    </section>
@endsection
