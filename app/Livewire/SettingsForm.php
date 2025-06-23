<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Session; // Import Session
use Illuminate\Support\Facades\App;     // Import App

class SettingsForm extends Component
{
    public $name = 'John Doe'; // Static for now, in real app it would be Auth::user()->name
    public $email = 'john.doe@example.com'; // Static for now
    public $current_password;
    public $new_password;
    public $confirm_new_password;
    public $theme_mode;
    public $locale;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255', // Email is disabled, but keeping rule for consistency
        'current_password' => 'nullable|string', // In real app, validate against hash
        'new_password' => 'nullable|string|min:8|same:confirm_new_password',
        'confirm_new_password' => 'nullable|string',
    ];

    public function mount()
    {
        // Initialize theme_mode from session or default to 'light'
        $this->theme_mode = Session::get('theme_mode', 'light');
        // Initialize locale from session or default to app config locale
        $this->locale = Session::get('locale', config('app.locale'));
    }

    public function saveProfile()
    {
        sleep(2); // Tambahkan baris ini SEMENTARA untuk pengujian
        // In a real application, you would update the authenticated user's profile
        $this->validateOnly('name'); // Validate only 'name' for this action
        // Example: Auth::user()->update(['name' => $this->name]);

        Session::flash('message', __('messages.success_message'));
    }

    public function changePassword()
    {
        // In a real application, you would validate and change the user's password
        $this->validate([
            'current_password' => 'required|string', // Assuming you'd check this against actual password
            'new_password' => 'required|string|min:8|same:confirm_new_password',
            'confirm_new_password' => 'required|string',
        ]);

        // Example: Hash::check($this->current_password, Auth::user()->password)
        // Example: Auth::user()->update(['password' => Hash::make($this->new_password)]);

        Session::flash('message', __('messages.success_message'));
        $this->reset(['current_password', 'new_password', 'confirm_new_password']); // Clear password fields
    }

    public function updateTheme()
    {
        sleep(2); // Tambahkan baris ini SEMENTARA untuk pengujian
        Session::put('theme_mode', $this->theme_mode);
        // Dispatch browser event to apply theme instantly
        $this->dispatchBrowserEvent('theme-updated', ['theme' => $this->theme_mode]);
    }

    public function updatedLocale($value)
    {
        Session::put('locale', $value);
        App::setLocale($value);
        // Dispatch browser event to reload page to apply full translation changes
        $this->dispatchBrowserEvent('locale-updated');
    }

    public function render()
    {
        return view('livewire.settings-form');
    }
}
