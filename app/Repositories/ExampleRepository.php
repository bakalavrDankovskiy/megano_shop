<?php

namespace App\Repositories;

use App\Contracts\Repositories\ExampleRepositoryContract;
use App\Models\User;
use Illuminate\Support\Facades\Cache;

class ExampleRepository implements ExampleRepositoryContract
{
    public function __construct(private readonly User $model)
    {
    }

    public function loadLastUser(): User
    {
        return Cache::tags('users')->rememberForever('lastUser', function () {
            return $this->model->orderBy('id', 'DESC')->firstOrFail();
        });
    }

    public function loadFirstUser(): User
    {
        return Cache::tags('users')->rememberForever('firstUser', function () {
            return $this->model->orderBy('id')->firstOrFail();
        });
    }
}
