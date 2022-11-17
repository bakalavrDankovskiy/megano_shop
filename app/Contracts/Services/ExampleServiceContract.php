<?php

namespace App\Contracts\Services;

use App\Models\User;

interface ExampleServiceContract
{
    public function doStaff(User $user): string;
}
