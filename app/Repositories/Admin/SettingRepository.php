<?php

namespace App\Repositories\Admin;

use App\Contracts\Repositories\Admin\SettingRepositoryContract;
use App\Models\Admin\Setting;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Cache;

class SettingRepository implements SettingRepositoryContract
{
    public function __construct(
        private readonly Setting $model,
    )
    {
    }

    public function all(): Collection
    {
        return Cache::tags(['admin', 'settings'])
            ->remember(
                'settings.all',
                600,
                function () {
                    return $this->model->all();
                });
    }

    public function findByName(string $name): Setting
    {
        return Cache::tags(['admin', 'settings'])
            ->remember(
                "settings.{$name}",
                600,
                function () use ($name) {
                    return Setting::where('name', $name)->first();
                });
    }
}
