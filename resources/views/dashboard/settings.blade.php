@extends('layouts.app')

@section('title', 'Settings')
@section('header_title', 'Account Settings')

@section('content')
    <div class="bg-white rounded-lg shadow-md p-6 dark:bg-gray-800"> {{-- Tambahkan kelas dark mode --}}
        {{-- Bagian Pesan Status (Opsional, untuk feedback setelah simpan/ubah) --}}
        @if (session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 dark:bg-green-800 dark:border-green-700 dark:text-green-200"
                role="alert">
                <strong class="font-bold">Success!</strong>
                <span class="block sm:inline">@lang(session('status'))</span>
            </div>
        @endif

        <h3 class="text-xl font-semibold text-gray-800 mb-4 dark:text-gray-100">@lang('messages.profile_information')</h3> {{-- Gunakan @lang --}}
        <form action="#" method="POST"> {{-- # untuk demo, nanti diarahkan ke route POST yang benar --}}
            @csrf {{-- Tambahkan CSRF token --}}
            <div class="mb-4">
                <label for="name"
                    class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">@lang('messages.name')</label>
                <input type="text" id="name" name="name" value="John Doe"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100">
            </div>
            <div class="mb-4">
                <label for="email"
                    class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">@lang('messages.email_address')</label>
                <input type="email" id="email" name="email" value="john.doe@example.com"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-200 dark:bg-gray-600 dark:border-gray-500 dark:text-gray-300"
                    disabled>
            </div>
            <div class="flex items-center justify-end">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline dark:bg-blue-700 dark:hover:bg-blue-800">@lang('messages.save_changes')</button>
            </div>
        </form>

        <h3 class="text-xl font-semibold text-gray-800 mt-8 mb-4 dark:text-gray-100">@lang('messages.change_password')</h3>
        <form action="#" method="POST"> {{-- # untuk demo, nanti diarahkan ke route POST yang benar --}}
            @csrf {{-- Tambahkan CSRF token --}}
            <div class="mb-4">
                <label for="current_password"
                    class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">@lang('messages.current_password')</label>
                <input type="password" id="current_password" name="current_password"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"
                    placeholder="********">
            </div>
            <div class="mb-4">
                <label for="new_password"
                    class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">@lang('messages.new_password')</label>
                <input type="password" id="new_password" name="new_password"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"
                    placeholder="********">
            </div>
            <div class="mb-6">
                <label for="confirm_new_password"
                    class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">@lang('messages.confirm_new_password')</label>
                <input type="password" id="confirm_new_password" name="confirm_new_password"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"
                    placeholder="********">
            </div>
            <div class="flex items-center justify-end">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline dark:bg-blue-700 dark:hover:bg-blue-800">@lang('messages.change_password')</button>
            </div>
        </form>

        {{-- BAGIAN BARU: Tema dan Bahasa --}}
        <h3 class="text-xl font-semibold text-gray-800 mt-8 mb-4 dark:text-gray-100">@lang('messages.theme') & @lang('messages.language')
        </h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="theme-toggle"
                    class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">@lang('messages.theme')</label>
                <select id="theme-toggle"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100">
                    <option value="light" @if (session('theme_mode', 'light') == 'light') selected @endif>@lang('messages.light')</option>
                    <option value="dark" @if (session('theme_mode', 'light') == 'dark') selected @endif>@lang('messages.dark')</option>
                </select>
            </div>
            <div>
                <label for="language-switcher"
                    class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">@lang('messages.language')</label>
                <select id="language-switcher"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100">
                    <option value="en" @if (app()->getLocale() == 'en') selected @endif>@lang('messages.english')</option>
                    <option value="id" @if (app()->getLocale() == 'id') selected @endif>@lang('messages.indonesian')</option>
                </select>
            </div>
        </div>
        {{-- AKHIR BAGIAN BARU --}}
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Theme Toggler Logic
            const themeToggle = document.getElementById('theme-toggle');
            if (themeToggle) {
                // Set initial value based on localStorage or system preference
                themeToggle.value = localStorage.getItem('theme') || (window.matchMedia(
                    '(prefers-color-scheme: dark)').matches ? 'dark' : 'light');

                themeToggle.addEventListener('change', function() {
                    const selectedTheme = this.value;
                    if (selectedTheme === 'dark') {
                        document.documentElement.classList.add('dark');
                        localStorage.setItem('theme', 'dark');
                    } else {
                        document.documentElement.classList.remove('dark');
                        localStorage.setItem('theme', 'light');
                    }
                });
            }

            // Language Switcher Logic
            const languageSwitcher = document.getElementById('language-switcher');
            if (languageSwitcher) {
                languageSwitcher.addEventListener('change', function() {
                    const selectedLocale = this.value;

                    // Buat form secara dinamis
                    const form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '{{ route('set.locale') }}';

                    const csrfToken = document.createElement('input');
                    csrfToken.type = 'hidden';
                    csrfToken.name = '_token';
                    csrfToken.value = '{{ csrf_token() }}';
                    form.appendChild(csrfToken);

                    const localeInput = document.createElement('input');
                    localeInput.type = 'hidden';
                    localeInput.name = 'locale';
                    localeInput.value = selectedLocale;
                    form.appendChild(localeInput);

                    document.body.appendChild(form);

                    // Tambahkan lang ke URL agar tetap konsisten
                    form.addEventListener('submit', function(e) {
                        e.preventDefault();
                        const url = new URL(window.location.href);
                        url.searchParams.set('lang', selectedLocale);
                        window.location.href = url.toString();
                    });

                    form.submit();
                });

            }
        });
    </script>
@endsection
