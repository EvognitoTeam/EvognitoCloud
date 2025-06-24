@extends('layouts.app')

@section('title', 'Add New Device')
@section('header_title', 'Add New Device')

@section('content')
    <div class="bg-white rounded-lg shadow-md p-6 dark:bg-gray-800"> {{-- dark mode background --}}
        <h3 class="text-xl font-semibold text-gray-800 mb-4 dark:text-gray-100">Device Details</h3> {{-- dark mode text --}}
        <form>
            @csrf {{-- Tambahkan CSRF token untuk form POST --}}
            <div class="mb-4">
                <label for="device_name"
                    class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">@lang('messages.device_name')</label>
                {{-- dark mode text --}}
                <input type="text" id="device_name" name="device_name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 dark:placeholder-gray-400"
                    {{-- dark mode input --}} placeholder="e.g., Living Room Lamp" required>
            </div>
            <div class="mb-4">
                <label for="device_type"
                    class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">@lang('messages.device_type')</label>
                {{-- dark mode text --}}
                <select id="device_type" name="device_type"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"
                    {{-- dark mode select --}} required>
                    <option value="">Select a type</option>
                    <option value="sensor">Sensor (Temperature, Humidity, etc.)</option>
                    <option value="actuator">Actuator (Light, Motor, Relay)</option>
                    <option value="gateway">Gateway</option>
                    <option value="other">Other</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="template"
                    class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">@lang('messages.assign_template')</label>
                {{-- dark mode text --}}
                <select id="template" name="template"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100">
                    {{-- dark mode select --}}
                    <option value="">No Template</option>
                    <option value="temp_sensor">Basic Temperature Sensor</option>
                    <option value="smart_light">Smart Light Control</option>
                    <option value="motor_ctrl">Motor Control Module</option>
                </select>
            </div>
            <div class="mb-6">
                <label for="description"
                    class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">@lang('messages.description')</label>
                {{-- dark mode text --}}
                <textarea id="description" name="description" rows="3"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 dark:placeholder-gray-400"
                    {{-- dark mode textarea --}} placeholder="Brief description of the device's function"></textarea>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline dark:bg-blue-700 dark:hover:bg-blue-800 dark:text-white">@lang('messages.add_device')</button>
                {{-- dark mode button --}}
                <a href="{{ route('dashboard.devices.index') }}"
                    class="inline-block align-baseline font-bold text-sm text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-200">
                    {{-- dark mode link --}}
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection
