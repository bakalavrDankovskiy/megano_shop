<?php

namespace App\Services\Admin;

use App\Contracts\Repositories\Admin\SettingRepositoryContract;
use App\Contracts\Services\Admin\GetSettingsServiceContract;

class GetSettingsService implements GetSettingsServiceContract
{
    public function __construct(private SettingRepositoryContract $repo)
    {
    }

    public function get(string $name, $defaultValue = null) : mixed
    {
        $setting = $this->repo->findByName($name);
        if (empty($setting) || empty($setting->value)) {
            return $defaultValue;
        } else {
            return $setting->value;
        }
    }
}
