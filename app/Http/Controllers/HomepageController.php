<?php

namespace App\Http\Controllers;

use App\Contracts\Repositories\BannerRepositoryContract;

class HomepageController extends Controller
{
    private $bannerRepository;

    public function __construct(BannerRepositoryContract $bannerRepository)
    {
        $this->bannerRepository = $bannerRepository;
    }

    public function index()
    {
        $banners = $this->bannerRepository->getInRandomOrder(3);

        return view('components.main-layout', compact('banners'));
    }
}
