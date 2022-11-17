<?php

namespace App\Providers;

use App\Contracts\Repositories\Admin\SettingRepositoryContract;
use App\Contracts\Repositories\BannerRepositoryContract;
use App\Contracts\Repositories\EloquentRepositoryContract;
use App\Contracts\Repositories\ExampleRepositoryContract;
use App\Repositories\Admin\SettingRepository;
use App\Repositories\Eloquent\BannerRepository;
use App\Repositories\Eloquent\BaseRepository;
use App\Repositories\ExampleRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->singleton(ExampleRepositoryContract::class, ExampleRepository::class);
        $this->app->singleton(SettingRepositoryContract::class, SettingRepository::class);
        $this->app->singleton(BannerRepositoryContract::class, BannerRepository::class);
        $this->app->bind(EloquentRepositoryContract::class, BaseRepository::class);
        $this->app->bind(BannerRepositoryContract::class, BannerRepository::class);
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
