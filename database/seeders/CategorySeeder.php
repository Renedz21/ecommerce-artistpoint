<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;
use App\Models\Category;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Oleos, acrilicos y temperas',
                'slug' => Str::slug('Oleos, acrilicos y temperas'),
                'icon' => "<i class='bx bxs-color-fill'></i>"
            ],
            [
                'name' => 'Lapices de colores',
                'slug' => Str::slug('Lapices de colores'),
                'icon' => "<i class='bx bxs-pencil'></i>"
            ],
            [
                'name' => 'Pinceles y brochas',
                'slug' => Str::slug('Pinceles y brochas'),
                'icon' => "<i class='bx bxs-paint-roll' ></i>"
            ],
            [
                'name' => 'Papeleria',
                'slug' => Str::slug('Papeleria'),
                'icon' => "<i class='bx bxs-book'></i>"
            ],
            [
                'name' => 'Marcadores',
                'slug' => Str::slug('Marcadores'),
                'icon' => "<i class='bx bxs-pen'></i>"
            ],
            [
                'name' => 'Miscelanea',
                'slug' => Str::slug('Miscelanea'),
                'icon' => "<i class='bx bxs-spray-can' ></i>"
            ],
        ];

        foreach ($categories as $item) {
            $categoria = Category::factory(1)->create($item)->first();

            $brands = Brand::factory(4)->create();

            foreach ($brands as $brand) {
                $brand->category()->attach($categoria->id);
            }
        }
    }
}
