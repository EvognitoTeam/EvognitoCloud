@extends('layouts.app')

@section('title', 'Data History')
@section('header_title', 'Historical Data')

@section('content')
    <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Device Data Logs</h3>

        <div class="mb-4 flex items-center space-x-4">
            <label for="select_device" class="block text-gray-700 dark:text-white text-sm font-bold ">Device:</label>
            <select id="select_device"
                class="shadow appearance-none border rounded py-2 px-3 text-gray-700 dark:text-white leading-tight focus:outline-none focus:shadow-outline">
                <option>Living Room Temperature</option>
                <option>Outdoor Weather Station</option>
                <option>Bedroom LED Strip</option>
            </select>

            <label for="select_variable" class="block text-gray-700 dark:text-white text-sm font-bold">Variable:</label>
            <select id="select_variable"
                class="shadow appearance-none border rounded py-2 px-3 text-gray-700 dark:text-white leading-tight focus:outline-none focus:shadow-outline">
                <option>Temperature (°C)</option>
                <option>Humidity (%)</option>
                <option>Light Level (Lux)</option>
            </select>

            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">Load Data</button>
            <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded-md">Export CSV</button>
        </div>

        <div
            class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg border border-gray-200 min-h-[300px] flex items-center justify-center text-gray-500">
            <p class="dark:text-white">
                [Chart/Graph of Historical Data will appear here]<br>
                <small>e.g., Temperature readings over the last 24 hours.</small>
            </p>
        </div>

        <h4 class="text-lg font-semibold text-gray-800 dark:text-white mt-8 mb-4">Raw Data Table (Last 10 entries)</h4>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-700">
                <thead class="bg-gray-50 dark:text-white dark:bg-gray-700">
                    <tr>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                            Timestamp
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                            Device
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                            Variable
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                            Value
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-600 divide-y divide-gray-700">
                    <tr class="hover:dark:bg-gray-500">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">2025-06-23 14:30:00
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">Living Room
                            Temperature</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">Temperature</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">25.1°C</td>
                    </tr>
                    <tr class="hover:dark:bg-gray-500">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">2025-06-23 14:25:00
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">Living Room
                            Temperature</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">Temperature</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">25.0°C</td>
                    </tr>
                    <tr class="hover:dark:bg-gray-500">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">2025-06-23 14:20:00
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">Outdoor Weather
                            Station</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">Humidity</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">72%</td>
                    </tr>
                    <tr class="hover:dark:bg-gray-500">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">2025-06-23 14:15:00
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">Bedroom LED Strip</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">Status</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-white">ON</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
