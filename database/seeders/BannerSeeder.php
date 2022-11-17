<?php

namespace Database\Seeders;

use App\Models\Banner;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use App\Models\Attachment;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = Attachment::factory()
            ->state(new Sequence(
                ['name' => 'goods'],
                ['name' => 'card'],
                ['name' => 'slider'],
                ['name' => 'videoca'],
            ))
            ->count(4)
            ->has(
                Banner::factory()
            )
            ->create();
    }
}
