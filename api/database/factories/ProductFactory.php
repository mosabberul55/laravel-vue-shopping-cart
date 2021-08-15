<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $number = 32;
        return [
            'title' => $this->faker->name,
            'price' => rand(100, 300),
            'image' => 'https://via.placeholder.com/150x100',
            'description' => $this->faker->text,
        ];
    }
}
