<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Cambiar la ruta pública por defecto en servidor
        /* $this->app->bind('path.public', function() {
            return '/home/admin/domains/cazamabosayulita.com/public_html'; // Reemplaza 'public_html' con la ruta real de tu nuevo directorio público
        }); */
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
    }
}
