<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // Wajib ditambahkan

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Paksa penggunaan HTTPS di lingkungan produksi
        if (env('APP_ENV') === 'production') {
            URL::forceScheme('https');
        }
    }
}
