<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\SiteConfig;
use Illuminate\Support\Facades\Schema;

class SiteConfigServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton('siteConfigs', function () {
            if (Schema::hasTable('site_configs')) {
                return SiteConfig::all()->keyBy('key');
            }
            return collect();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('*', function ($view) {
            $siteConfigs = app('siteConfigs');
            $primary_color = $siteConfigs['primary_color']->value ?? 'violet';

            $view->with('siteConfigs', $siteConfigs)
                ->with('primary_color', $primary_color);
        });
    }
}
