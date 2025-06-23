{{-- resources/views/livewire/settings-form.blade.php --}}
<div x-data="{ showMessage: true }" @locale-updated.window="location.reload()" wire:ignore.self>
    @if (session()->has('message'))
        <div x-show="showMessage" x-init="setTimeout(() => showMessage = false, 3000)"
            class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4 dark:bg-green-800 dark:border-green-700 dark:text-green-200"
            role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('message') }}</span>
            <span @click="showMessage = false" class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500 dark:text-green-300" role="button"
                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <title>Close</title>
                    <path
                        d="M14.348 14.849a1.2 1.2 0 01-1.697 0L10 11.196l-2.651 2.65a1.2 1.2 0 11-1.697-1.697L8.303 9.5l-2.651-2.65a1.2 1.2 0 011.697-1.697L10 7.803l2.651-2.65a1.2 1.2 0 011.697 1.697L11.696 9.5l2.651 2.65a1.2 1.2 0 010 1.699z" />
                </svg>
            </span>
        </div>
    @endif

    <div class="bg-white rounded-lg shadow-md p-6 dark:bg-gray-800">
        <h3 class="text-xl font-semibold text-gray-800 mb-4 dark:text-gray-100">@lang('messages.profile_information')</h3>
        <form wire:submit.prevent="saveProfile">
            <div class="mb-4">
                <label for="name"
                    class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">@lang('messages.name')</label>
                <input type="text" id="name" wire:model.defer="name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100">
                @error('name')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email"
                    class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">@lang('messages.email_address')</label>
                <input type="email" id="email" wire:model.defer="email" disabled
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline bg-gray-200 dark:bg-gray-600 dark:border-gray-500 dark:text-gray-300">
            </div>
            <div class="flex items-center justify-end">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline dark:bg-blue-700 dark:hover:bg-blue-800"
                    wire:loading.attr="disabled" wire:target="saveProfile">
                    <span wire:loading.remove wire:target="saveProfile">@lang('messages.save_changes')</span>
                    <span wire:loading wire:target="saveProfile">@lang('messages.saving')</span>
                </button>
            </div>
        </form>

        <h3 class="text-xl font-semibold text-gray-800 mt-8 mb-4 dark:text-gray-100">@lang('messages.change_password')</h3>
        <form wire:submit.prevent="changePassword">
            <div class="mb-4">
                <label for="current_password"
                    class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">@lang('messages.current_password')</label>
                <input type="password" id="current_password" wire:model.defer="current_password"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"
                    placeholder="********">
                @error('current_password')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="new_password"
                    class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">@lang('messages.new_password')</label>
                <input type="password" id="new_password" wire:model.defer="new_password"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"
                    placeholder="********">
                @error('new_password')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-6">
                <label for="confirm_new_password"
                    class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">@lang('messages.confirm_new_password')</label>
                <input type="password" id="confirm_new_password" wire:model.defer="confirm_new_password"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100"
                    placeholder="********">
                @error('confirm_new_password')
                    <span class="text-red-500 text-xs">{{ $message }}</span>
                @enderror
            </div>
            <div class="flex items-center justify-end">
                <button type="submit"
                    class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline dark:bg-blue-700 dark:hover:bg-blue-800"
                    wire:loading.attr="disabled" wire:target="changePassword">
                    <span wire:loading.remove wire:target="changePassword">@lang('messages.change_password')</span>
                    <span wire:loading wire:target="changePassword">@lang('messages.changing')</span>
                </button>
            </div>
        </form>

        <h3 class="text-xl font-semibold text-gray-800 mt-8 mb-4 dark:text-gray-100">@lang('messages.theme') &
            @lang('messages.language')</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="theme-toggle"
                    class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">@lang('messages.theme')</label>
                <select id="theme-toggle" wire:model="theme_mode" wire:change="updateTheme"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100">
                    <option value="light">@lang('messages.light')</option>
                    <option value="dark">@lang('messages.dark')</option>
                </select>
            </div>
            <div>
                <label for="language-switcher"
                    class="block text-gray-700 text-sm font-bold mb-2 dark:text-gray-300">@lang('messages.language')</label>
                <select id="language-switcher" wire:model="locale"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100">
                    <option value="en">@lang('messages.english')</option>
                    <option value="id">@lang('messages.indonesian')</option>
                </select>
            </div>
        </div>
    </div>
</div>
