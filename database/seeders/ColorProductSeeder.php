<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;

class ColorProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = Product::whereHas('subcategory', function (Builder $query) {
            $query->where('color', true);
        })->get();

        foreach ($products as $product) {
            $product->colors()->attach([
                1 => [
                    'quantity' => 20
                ],
                2 => [
                    'quantity' => 20
                ],
                3 => [
                    'quantity' => 20
                ],
                4 => [
                    'quantity' => 20
                ],
                5 => [
                    'quantity' => 20
                ],
                6 => [
                    'quantity' => 20
                ],
                7 => [
                    'quantity' => 20
                ]
            ]);
        }
    }
}
