<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\\Models\\Event>
 */
class EventFactory extends Factory
{
    protected $model = Event::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->words(3,true),
            'img_path' => fake()->imageUrl,
            'description' => fake()->sentence,
            'price' => fake()->numerify,
            'start_date' => fake()->date,
            'end_date' => fake()->date,
            'published' => fake()->boolean(),
            'cat_id' => fake()->numberBetween(1,2)
        ];
    }
}
