<?php

namespace App\Providers;

use App\Models\Setting;
use App\Models\Social;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;

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
        Model::unguard();

        $settings = Setting::getAllSettings();
        view()->share('setting', $settings);

        $socials = Social::get();
        view()->share('socials', $socials);
    }
}
