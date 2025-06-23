@extends('layouts.app')
@section('title', 'Dashboard')
@section('content')
    <h1 class="text-3xl font-bold mb-4">Welcome to IoT Dashboard</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-lg font-semibold">Device 1</h2>
            <p>Status: <span class="text-green-600">Online</span></p>
            <p>Temperature: 24°C</p>
            <p>Humidity: 60%</p>
        </div>
        <div class="bg-white p-4 rounded shadow">
            <h2 class="text-lg font-semibold">Device 2</h2>
            <p>Status: <span class="text-red-600">Offline</span></p>
            <p>Last Seen: 5 hours ago</p>
        </div>
    </div>
@endsection
