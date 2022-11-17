<?php

namespace App\Contracts\Services\Admin;

interface GetSettingsServiceContract
{
    public function get(string $name, $defaultValue = null) : mixed;
}
