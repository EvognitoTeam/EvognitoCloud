@extends('layouts.app')

@section('title', 'Users Management')
@section('header_title', 'Manage Users')

@section('content')
    <div class="bg-white rounded-lg shadow-md p-6 dark:bg-gray-800">
        <div class="flex justify-between items-center mb-4">
            <h3 class="text-xl font-semibold text-gray-800 dark:text-white">Platform Users</h3>
            <button class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">Invite New User</button>
        </div>

        <p class="text-gray-600 dark:text-white mb-6">Manage user accounts, roles, and permissions within your organization.
        </p>

        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-700">
                <thead class="bg-gray-50 dark:bg-gray-600 dark:text-white">
                    <tr>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                            Name</th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                            Email</th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                            Role</th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                            Status
                        </th>
                        <th
                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-white uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-900 dark:bg-gray-700">
                    <tr class="hover:dark:bg-gray-500">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900 dark:text-white">John Doe
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-white">john.doe@example.com
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600 dark:text-white">Admin</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <button
                                class="text-blue-600 bg-blue-400 dark:bg-blue-700 hover:bg-blue-800 dark:text-white dark:hover:text-white text-sm mr-4 px-5 py-2 rounded-md">Edit</button>
                            <button
                                class="text-red-600 bg-red-400 dark:bg-red-700 hover:bg-red-800 dark:text-white dark:hover:text-white hover:text-red-800 text-sm px-5 py-2 rounded-md">Delete</button>

                        </td>
                    </tr>
                    <tr class="hover:dark:bg-gray-500">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Jane Smith</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">jane.smith@example.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Editor</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Active</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-4">Edit</a>
                            <a href="#" class="text-red-600 hover:text-red-900">Delete</a>
                        </td>
                    </tr>
                    <tr class="hover:dark:bg-gray-500">
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Guest User</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">guest@example.com</td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">Viewer</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">Pending
                                Invite</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900 mr-4">Edit</a>
                            <a href="#" class="text-gray-400 cursor-not-allowed">Delete</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
