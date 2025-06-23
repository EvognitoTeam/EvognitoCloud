{{-- resources/views/partials/sidebar.blade.php --}}
<aside class="w-64 bg-gray-800 text-white flex-shrink-0 flex flex-col dark:bg-gray-800">
    <div class="p-6 text-2xl font-bold border-b border-gray-700 dark:border-gray-700">
        Evognito Cloud
    </div>
    <nav class="mt-6 flex-grow">
        <a href="{{ localized_route('dashboard') }}"
            class="flex items-center py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white {{ Request::routeIs('dashboard') ? 'bg-gray-700 text-white dark:bg-gray-700 dark:text-white' : 'dark:text-gray-300' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 01-1 1h-3">
                </path>
            </svg>
            Dashboard
        </a>
        <a href="{{ localized_route('dashboard.devices.index') }}"
            class="flex items-center py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white {{ Request::routeIs('dashboard.devices.*') ? 'bg-gray-700 text-white dark:bg-gray-700 dark:text-white' : 'dark:text-gray-300' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9.75 17L9.75 17l.001.001.001-.001.001.001-.001-.001H12L9.75 17zM12 12V3.001L21 12H12zM3 12H12">
                </path>
            </svg>
            My Devices
        </a>
        <a href="{{ localized_route('dashboard.templates') }}"
            class="flex items-center py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white {{ Request::routeIs('dashboard.templates') ? 'bg-gray-700 text-white dark:bg-gray-700 dark:text-white' : 'dark:text-gray-300' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                </path>
            </svg>
            Templates
        </a>
        <a href="{{ localized_route('dashboard.automations') }}"
            class="flex items-center py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white {{ Request::routeIs('dashboard.automations') ? 'bg-gray-700 text-white dark:bg-gray-700 dark:text-white' : 'dark:text-gray-300' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01">
                </path>
            </svg>
            Automations
        </a>
        <a href="{{ localized_route('dashboard.data_history') }}"
            class="flex items-center py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white {{ Request::routeIs('dashboard.data_history') ? 'bg-gray-700 text-white dark:bg-gray-700 dark:text-white' : 'dark:text-gray-300' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z">
                </path>
            </svg>
            Data History
        </a>
        <a href="{{ localized_route('dashboard.users') }}"
            class="flex items-center py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white {{ Request::routeIs('dashboard.users') ? 'bg-gray-700 text-white dark:bg-gray-700 dark:text-white' : 'dark:text-gray-300' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 20h2a2 2 0 002-2V7a2 2 0 00-2-2h-2V3m-5 13L9 20h6l-2-4H9zm2-10V3M7 7h10M7 11h10M7 15h10M4 4h.01M4 8h.01M4 12h.01">
                </path>
            </svg>
            Users
        </a>
        <a href="{{ localized_route('dashboard.settings') }}"
            class="flex items-center py-2 px-6 text-gray-300 hover:bg-gray-700 hover:text-white {{ Request::routeIs('dashboard.settings') ? 'bg-gray-700 text-white dark:bg-gray-700 dark:text-white' : 'dark:text-gray-300' }}">
            <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                </path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Settings
        </a>
    </nav>
    <a href="{{ localized_route('logout') }}"
        class="flex items-center py-3 px-6 text-gray-300 hover:bg-gray-700 hover:text-white border-t border-gray-700 mt-auto dark:border-gray-700 dark:text-gray-300 dark:hover:bg-gray-700 dark:hover:text-white">
        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
        </svg>
        Logout
    </a>
</aside>
