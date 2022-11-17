<?php

namespace App\Contracts\Repositories;

use Illuminate\Support\Collection;

interface BannerRepositoryContract
{
    public function getInRandomOrder(int $take): Collection;
}
