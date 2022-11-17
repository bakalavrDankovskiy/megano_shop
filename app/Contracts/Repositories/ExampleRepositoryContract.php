<?php

namespace App\Contracts\Repositories;

use App\Models\User;

interface ExampleRepositoryContract
{
    public function loadLastUser(): User;

    public function loadFirstUser(): User;
}
