<?php

namespace App\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session; // Import Session

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Inject ?lang=xx ke semua URL
        \Illuminate\Support\Facades\Blade::directive('localized_url', function ($expression) {
            $lang = session('locale', App::getLocale());
            return "<?php echo $expression . (str_contains($expression, '?') ? '&' : '?') . 'lang=' . '$lang'; ?>";
        });
    }
}
