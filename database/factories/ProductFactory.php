<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Tax;

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
        $name = $this->faker->name.Str::random(4);
        return [
            'uuid' => $this->faker->uuid,
            'name' => $name,
            'desc' => $this->faker->sentence,
            'main_price' => $this->faker->numberBetween(4,400),
            'discount' => $this->faker->numberBetween(4,8),
            'quantity' => $this->faker->numberBetween(4,8),
            'video' => $this->faker->url,
            'image' => $this->faker->imageUrl(),
            'brand_id' => Brand::factory(),
            'p_category_id' => ProductCategory::factory(),
            'tax_id' => Tax::factory()
        ];
    }
}
