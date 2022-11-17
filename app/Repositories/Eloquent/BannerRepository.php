<?php

namespace App\Repositories\Eloquent;

use App\Contracts\Repositories\BannerRepositoryContract;
use App\Contracts\Services\Admin\GetSettingsServiceContract;
use App\Models\Banner;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

class BannerRepository extends BaseRepository implements BannerRepositoryContract
{
    /**
     * UserRepository constructor.
     *
     * @param Banner $model
     */
    public function __construct(Banner $model, private readonly GetSettingsServiceContract $service)
    {
        parent::__construct($model);
    }

    /**
     * @return Collection
     */
    public function getInRandomOrder(int $take): Collection
    {
        $banners =
            Cache::tags(['banners'])
                ->remember('uses_banners',
                    $this->service->get('cache_time', 600),
                    function () use ($take) {
                        return $this->model->inRandomOrder()->take($take)->get();
                    });

        return $banners;
    }
}
