<?php

namespace Database\Factories;

use App\Models\Posts;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Posts::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //generate titles as senstence for post
            'title'=>$this->faker->sentence(),
            //generate bodies as paragarph for post
            'body'=>$this->faker->paragraph(),
            
        ];
    }
}
