<?php

namespace Heseya\AppHelper;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([__DIR__ . '/../config/heseya.php' => config_path('heseya.php')]);
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/heseya.php', 'heseya');
    }
}
