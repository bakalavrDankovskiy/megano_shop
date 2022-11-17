<?php

namespace App\Services;

use App\Contracts\Repositories\ExampleRepositoryContract;
use App\Contracts\Services\ExampleServiceContract;
use App\Models\User;

class ExampleService implements ExampleServiceContract
{
    public function __construct(private readonly ExampleRepositoryContract $exampleRepository)
    {
    }

    public function doStaff(User $user): string
    {
        $secondUser = $this->exampleRepository->loadLastUser();

        return sprintf("%s and %s are friends", $user->name, $secondUser->name);
    }
}
