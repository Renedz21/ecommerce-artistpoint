<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Subcategory;
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
        $name = $this->faker->sentence(2);

        $subcategoria = Subcategory::all()->random();
        $category = $subcategoria->category;

        $brands = $category->brands->random();

        if ($subcategoria->color) {
            $quantity = null;
        } else {
            $quantity = 15;
        }

        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomElement([19.99, 49.99, 79.99, 99.99]),
            'subcategory_id' => $subcategoria->id,
            'brand_id' => $brands->id,
            'quantity' => $quantity,
            'status' => 2
        ];
    }
}
