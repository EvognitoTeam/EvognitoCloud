@extends('layouts.app') {{-- Changed from layouts.dashboard to layouts.app --}}

@section('title', 'My Devices')
@section('header_title', 'My Devices')

@section('content')
    <div class="bg-white rounded-lg shadow-md p-6 dark:bg-gray-800"> {{-- dark mode background --}}
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-gray-100">Your Connected Devices</h3>
            {{-- dark mode text --}}
            <a href="{{ route('dashboard.devices.create') }}"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md dark:bg-blue-700 dark:hover:bg-blue-800 dark:text-white">
                Add New Device
            </a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700"> {{-- dark mode divider --}}
                <thead class="bg-gray-50 dark:bg-gray-700"> {{-- dark mode header background --}}
                    <tr>
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">
                            Device Name</th> {{-- dark mode text --}}
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">
                            Status</th> {{-- dark mode text --}}
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">
                            Last Activity</th> {{-- dark mode text --}}
                        <th scope="col"
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider dark:text-gray-300">
                            Actions</th> {{-- dark mode text --}}
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-gray-700">
                    {{-- dark mode background and divider --}}
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">Living Room Temperature
                        </td> {{-- dark mode text --}}
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-700 dark:text-green-100">Online</span>
                            {{-- dark mode status badge --}}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">5 minutes ago</td>
                        {{-- dark mode text --}}
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="#"
                                class="text-blue-600 hover:text-blue-900 mr-4 dark:text-blue-400 dark:hover:text-blue-500">View
                                Data</a> {{-- dark mode link --}}
                            <a href="#"
                                class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-500">Control</a>
                            {{-- dark mode link --}}
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">Outdoor Weather Station
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-700 dark:text-green-100">Online</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">15 minutes ago</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="#"
                                class="text-blue-600 hover:text-blue-900 mr-4 dark:text-blue-400 dark:hover:text-blue-500">View
                                Data</a>
                            <a href="#"
                                class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-500">Control</a>
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">Garage Door Sensor</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-red-800 dark:bg-red-700 dark:text-red-100">Offline</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">2 days ago</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="#"
                                class="text-blue-600 hover:text-blue-900 mr-4 dark:text-blue-400 dark:hover:text-blue-500">View
                                Data</a>
                            <a href="#" class="text-gray-400 cursor-not-allowed dark:text-gray-600">Control</a>
                            {{-- dark mode text for disabled link --}}
                        </td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">Bedroom LED Strip</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-700 dark:text-green-100">Online</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-gray-900 dark:text-gray-200">20 seconds ago</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="#"
                                class="text-blue-600 hover:text-blue-900 mr-4 dark:text-blue-400 dark:hover:text-blue-500">View
                                Data</a>
                            <a href="#"
                                class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-500">Control</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
