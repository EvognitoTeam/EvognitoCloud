@extends('layouts.app')

@section('title', 'Automations')
@section('header_title', 'Automations & Rules')

@section('content')
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Your Automations</h3>
            <button class="bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-md">Create New
                Automation</button>
        </div>

        <p class="text-gray-600 dark:text-white mb-6">Automate your devices based on conditions and schedules. Examples: "If
            temperature is >
            30°C, turn on fan." or "Turn on light at 6 PM daily."</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="border border-gray-200 rounded-lg p-4">
                <h4 class="text-lg font-semibold text-gray-800 dark:text-white mb-2">Automate Living Room Fan</h4>
                <p class="text-gray-600 dark:text-white text-sm mb-3">Trigger: Temperature Sensor > 28°C</p>
                <p class="text-gray-600 dark:text-white text-sm mb-3">Action: Turn ON Living Room Fan</p>
                <div class="flex justify-between items-center">
                    <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                    <div>
                        <button
                            class="text-blue-600 bg-blue-400 dark:bg-blue-700 hover:bg-blue-800 dark:text-white dark:hover:text-white text-sm mr-4 px-5 py-2 rounded-md">Edit</button>
                        <button
                            class="text-red-600 bg-red-400 dark:bg-red-700 hover:bg-red-800 dark:text-white dark:hover:text-white hover:text-red-800 text-sm px-5 py-2 rounded-md">Delete</button>

                    </div>
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Daily Outdoor Light Schedule</h4>
                <p class="text-gray-600 text-sm mb-3">Trigger: Every day at 06:00 PM</p>
                <p class="text-gray-600 text-sm mb-3">Action: Turn ON Outdoor Light</p>
                <div class="flex justify-between items-center">
                    <span
                        class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                    <div>
                        <button class="text-blue-600 hover:text-blue-800 text-sm mr-4">Edit</button>
                        <button class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                    </div>
                </div>
            </div>

            <div class="border border-gray-200 rounded-lg p-4">
                <h4 class="text-lg font-semibold text-gray-800 mb-2">Low Battery Alert</h4>
                <p class="text-gray-600 text-sm mb-3">Trigger: Device "Garden Sensor" Battery < 20%</p>
                        <p class="text-gray-600 text-sm mb-3">Action: Send Email Notification to User</p>
                        <div class="flex justify-between items-center">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                            <div>
                                <button class="text-blue-600 hover:text-blue-800 text-sm mr-4">Edit</button>
                                <button class="text-red-600 hover:text-red-800 text-sm">Delete</button>
                            </div>
                        </div>
            </div>
        </div>
    </div>
@endsection
