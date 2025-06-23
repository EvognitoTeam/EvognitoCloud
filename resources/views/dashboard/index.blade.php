@extends('layouts.app')

@section('title', 'Dashboard Home')
@section('header_title', 'Overview Dashboard')

@section('content')
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-lg shadow-md p-6 dark:bg-gray-800"> {{-- Add dark classes --}}
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-600 mr-4 dark:bg-blue-800 dark:text-blue-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9.75 17L9.75 17l.001.001.001-.001.001.001-.001-.001H12L9.75 17zM12 12V3.001L21 12H12zM3 12H12">
                        </path>
                    </svg>
                </div>
                <div>
                    <p class="text-gray-500 text-sm dark:text-gray-400">Total Devices</p>
                    <h2 class="text-3xl font-bold text-gray-800 dark:text-gray-100">12</h2>
                </div>
            </div>
        </div>
        {{-- ... other cards with dark classes ... --}}
    </div>

    <div class="mt-8 bg-white rounded-lg shadow-md p-6 dark:bg-gray-800">
        <h3 class="text-xl font-semibold text-gray-800 mb-4 dark:text-gray-100">Recent Device Activity</h3>
        <ul class="divide-y divide-gray-200 dark:divide-gray-700">
            <li class="py-3 flex justify-between items-center">
                <div class="flex items-center">
                    <span class="inline-block w-3 h-3 bg-green-500 rounded-full mr-3"></span>
                    <span class="dark:text-gray-200">Living Room Light turned <span
                            class="font-semibold text-green-600">ON</span></span>
                </div>
                <span class="text-gray-500 text-sm dark:text-gray-400">10 minutes ago</span>
            </li>
            {{-- ... other list items with dark classes ... --}}
        </ul>
    </div>
@endsection
