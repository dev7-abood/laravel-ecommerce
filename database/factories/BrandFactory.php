<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name =  $this->faker->name;
        return [
            'name' => $name,
            'slug' => $name,
            'title' => $this->faker->title,
            'is_published' => true,
            'image' => $this->faker->imageUrl()
        ];
    }
}
