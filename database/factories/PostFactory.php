<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->unique->sentence(),
            'excerpt'=>$this->faker->realtext($maxNbcharts=50),
            'body'=>$this->faker->text(),
            'image_path'=>$this->faker->imageUrl(640,480),
            'is_published'=>false,
            'min_to_read'=>$this->faker->numberBetween(1,10),
            'user_id'=>1
            
        ];
    }
}
