<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Attachment;

class AttachmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Attachment::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'name',
            'original_name' => 'blob',
            'mime' => 'image/png',
            'extension' => 'png',
            'path' => 'img/',
            'disk' => 'public',
            'user_id' => 1,
        ];
    }
}
