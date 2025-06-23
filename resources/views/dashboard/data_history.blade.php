@extends('layouts.app')

@section('title', 'Data History')
@section('header_title', 'Historical Data')

@section('content')
    <div class="bg-white rounded-lg shadow-md p-6">
        <h3 class="text-xl font-semibold text-gray-800 mb-4">Device Data Logs</h3>

        <div class="mb-4 flex items-center space-x-4">
            <label for="select_device" class="block text-gray-700 text-sm font-bold">Device:</label>
            <select id="select_device"
                class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option>Living Room Temperature</option>
                <option>Outdoor Weather Station</option>
                <option>Bedroom LED Strip</option>
            </select>

            <label for="select_variable" class="block text-gray-700 text-sm font-bold">Variable:</label>
            <select id="select_variable"
                class="shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                <option>Temperature (°C)</option>
                <option>Humidity (%)</option>
                <option>Light Level (Lux)</option>
            </select>

            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">Load Data</button>
            <button class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded-md">Export CSV</button>
        </div>

        <div
            class="bg-gray-50 p-4 rounded-lg border border-gray-200 min-h-[300px] flex items-center justify-center text-gray-500">
            <p>
                [Chart/Graph of Historical Data will appear here]<br>
                <small>e.g., Temperature readings over the last 24 hours.</small>
            </p>
        </div>

        <h4 class="text-lg font-semibold text-gray-800 mt-8 mb-4">Raw Data Table (Last 10 entries)</h4>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Timestamp
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Device
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Variable
                        </th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Value
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2025-06-23 14:30:00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Living Room Temperature</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Temperature</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">25.1°C</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2025-06-23 14:25:00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Living Room Temperature</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Temperature</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">25.0°C</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2025-06-23 14:20:00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Outdoor Weather Station</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Humidity</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">72%</td>
                    </tr>
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">2025-06-23 14:15:00</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Bedroom LED Strip</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">Status</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">ON</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
