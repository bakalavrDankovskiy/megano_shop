<?php

namespace App\Contracts\Repositories\Admin;

use App\Models\Admin\Setting;
use Illuminate\Database\Eloquent\Collection;

interface SettingRepositoryContract
{
    public function all(): Collection;

    public function findByName(string $name): Setting;
}
