<?php

namespace App\Providers;

use App\Enums\Status;
use App\Models\Service;
use App\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void {

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {

        if(!app()->runningInConsole()) {
            View::share([
                'settings' => new Setting(),
                'services_menu' => Service::status(Status::ACTIVE)->get()
            ]);
        }
    }
}
