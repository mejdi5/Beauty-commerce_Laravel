<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(),
            'price' => $this->faker->numberBetween(10, 400),
            'category_id' => Category::factory(),
            'inStock' => true
        ];
    }
}
