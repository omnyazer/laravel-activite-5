<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name'      => $this->faker->word(),
            'price'     => $this->faker->randomFloat(2, 10, 200),
            'is_public' => $this->faker->boolean(),
            'user_id'   => User::factory()
        ];
    }
}
