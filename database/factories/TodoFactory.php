<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Todo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ToDo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'title' => $this->faker->name(),
           'description' => $this->faker->text(),
           'is_done' => $this->faker->boolean(),
           'is_public' => $this->faker->boolean(),
           'user_id' => User::factory()->create()->id,
           'category_id' => Category::factory()->create()->id,
        ];
    }
}
