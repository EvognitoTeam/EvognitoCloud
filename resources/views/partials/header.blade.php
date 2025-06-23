{{-- resources/views/partials/header.blade.php --}}
<header class="bg-white shadow-md p-4 flex justify-between items-center dark:bg-gray-800">
    {{-- Hamburger menu button for mobile --}}
    <button @click="sidebarOpen = true"
        class="lg:hidden p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-gray-600 dark:focus:ring-gray-300">
        <svg class="h-6 w-6 text-gray-700 dark:text-gray-200" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
        </svg>
    </button>

    <h1 class="text-2xl font-semibold text-gray-800 dark:text-gray-100">@yield('header_title', 'Dashboard')</h1>
    <div class="flex items-center">

        <span id="current-time" class="text-gray-600 text-sm mr-6 dark:text-gray-400"></span>

        <span class="text-gray-700 mr-4 dark:text-gray-300">
            @lang('messages.welcome_user', ['name' => Auth()->user()->name])
        </span>

        <div class="h-8 w-8 rounded-full bg-gray-200 flex items-center justify-center mr-3 dark:bg-gray-700">
            <i class="fas fa-user text-gray-600 text-lg dark:text-gray-400"></i>
        </div>
        <a href="{{ route('logout') }}"
            class="text-gray-600 hover:text-gray-800 dark:text-gray-400 dark:hover:text-gray-100">
            <i class="fas fa-sign-out-alt text-lg"></i>
        </a>
    </div>
</header>

<script>
    // JavaScript untuk menampilkan jam saat ini (tetap di sini agar scope-nya lokal ke header)
    function updateTime() {
        const now = new Date();
        const options = {
            year: 'numeric',
            month: 'long',
            day: 'numeric',
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit',
            hour12: false,
            timeZoneName: 'short'
        };
        const formattedTime = new Intl.DateTimeFormat('en-GB', {
            ...options,
            timeZone: 'Asia/Jakarta'
        }).format(now);
        document.getElementById('current-time').innerText = formattedTime + ' WIB';
    }

    setInterval(updateTime, 1000);
    updateTime(); // Panggil saat halaman dimuat
</script>
