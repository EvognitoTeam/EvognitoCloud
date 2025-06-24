@extends('layouts.app') {{-- Changed from layouts.dashboard to layouts.app --}}

@section('title', 'Templates')
@section('header_title', 'Device Templates')

@section('content')
    <div class="bg-white rounded-lg shadow-md p-6 dark:bg-gray-800">
        <div class="flex justify-between items-center mb-4 dark:bg-gray-800">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Your Device Templates</h3>
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">Create New
                Template</button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Template Card 1 -->
            <div class="border border-gray-200 rounded-lg p-4 dark:bg-gray-600">
                <h4 class="text-lg font-semibold dark:text-white text-gray-800 mb-2">Basic Temperature Sensor</h4>
                <p class="dark:text-white text-gray-600 text-sm mb-3">Template for a simple temperature and humidity sensor.
                </p>
                <p class="dark:text-white text-gray-500 text-xs mb-3">Last Updated: 2024-05-20</p>
                <div class="flex justify-end">
                    <button
                        class="text-blue-600 bg-blue-400 dark:bg-blue-700 hover:bg-blue-800 dark:text-white dark:hover:text-white text-sm mr-4 px-5 py-2 rounded-md">Edit</button>
                    <button
                        class="text-red-600 bg-red-400 dark:bg-red-700 hover:bg-red-800 dark:text-white dark:hover:text-white hover:text-red-800 text-sm px-5 py-2 rounded-md">Delete</button>
                </div>
            </div>

            <!-- Template Card 2 -->
            <div class="border border-gray-200 rounded-lg p-4 dark:bg-gray-300">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Smart Light Control</h4>
                <p class="text-gray-600 text-sm mb-3">Template for an ESP32-based smart light with dimming.</p>
                <p class="text-gray-500 text-xs mb-3">Last Updated: 2024-06-10</p>
                <div class="flex justify-end">
                    <button class="text-blue-600 hover:text-blue-800 text-sm mr-4">Edit</button>
                    <button class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                </div>
            </div>

            <!-- Template Card 3 -->
            <div class="border border-gray-200 rounded-lg p-4 dark:bg-gray-300">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Motor Control Module</h4>
                <p class="text-gray-600 text-sm mb-3">Template for controlling a DC motor with direction and speed.</p>
                <p class="text-gray-500 text-xs mb-3">Last Updated: 2024-04-01</p>
                <div class="flex justify-end">
                    <button
                        class="text-blue-600 bg-blue-400 dark:bg-blue-900 dark:text-white hover:text-blue-800 text-sm mr-4 px-5 py-2">Edit</button>
                    <button class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                </div>
            </div>
        </div>
    </div>
@endsection
