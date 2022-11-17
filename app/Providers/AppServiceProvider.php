<?php

namespace App\Providers;

use App\Contracts\Repositories\Admin\SettingRepositoryContract;
use App\Contracts\Repositories\BannerRepositoryContract;
use App\Contracts\Services\Admin\GetSettingsServiceContract;
use App\Contracts\Services\ExampleServiceContract;
use App\Repositories\Admin\SettingRepository;
use App\Repositories\Eloquent\BannerRepository;
use App\Services\Admin\GetSettingsService;
use App\Services\ExampleService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(ExampleServiceContract::class, ExampleService::class);
        $this->app->singleton(GetSettingsServiceContract::class, GetSettingsService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }
}
