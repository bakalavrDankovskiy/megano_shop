<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Banner;
use App\Models\Attachment;

class BannerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Banner::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = $this->faker->sentence;

        return [
            'title' => $title,
            'description' => $this->faker->realText(rand(50, 70)),
            'link' => 'https://' . Str::slug($title, '-'),
            'attachment_id' => Attachment::factory(),
        ];
    }
}
