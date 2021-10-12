<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Str;

use App\Models\Subcategory;


class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sub = [
            /* Oleos, acrilicos y temperas */
            [
                'category_id' => 1,
                'name' => 'Oleos',
                'slug' => Str::slug('Oleos'),
                'color' => true
            ],
            [
                'category_id' => 1,
                'name' => 'Pintura acrilica',
                'slug' => Str::slug('Pintura acrilica'),
                'color' => true,
            ],
            [
                'category_id' => 1,
                'name' => 'Temperas profesionales',
                'slug' => Str::slug('Temperas profesionales'),
                'color' => true,
            ],
            [
                'category_id' => 1,
                'name' => 'Temperas escolares',
                'slug' => Str::slug('Temperas escolares'),
                'color' => true,
            ],

            /* Lapices de colores */
            [
                'category_id' => 2,
                'name' => 'Colores profesionales',
                'slug' => Str::slug('Colores profesionales'),
                'color' => true,
            ],
            [
                'category_id' => 2,
                'name' => 'Colores semi-profesionales',
                'slug' => Str::slug('Colores semi-profesionales'),
                'color' => true,
            ],
            [
                'category_id' => 2,
                'name' => 'Colores escolares',
                'slug' => Str::slug('Colores escolares'),
                'color' => true,
            ],

            /* Pinceles y brochas */

            [
                'category_id' => 3,
                'name' => 'Pinceles pelo de ardilla',
                'slug' => Str::slug('Pinceles pelo de ardilla'),
            ],
            [
                'category_id' => 3,
                'name' => 'Pinceles pelo de camello',
                'slug' => Str::slug('Pinceles pelo de camello'),
            ],
            [
                'category_id' => 3,
                'name' => 'Pinceles cerda dura',
                'slug' => Str::slug('Pinceles cerda dura'),
            ],
            [
                'category_id' => 3,
                'name' => 'Pinceles cerda suave',
                'slug' => Str::slug('Pinceles cerda suave'),
            ],
            [
                'category_id' => 3,
                'name' => 'Pinceles escolares',
                'slug' => Str::slug('Pinceles escolares'),
            ],

            /* PAPELERIA */

            [
                'category_id' => 4,
                'name' => 'Sketchbooks',
                'slug' => Str::slug('Sketchbooks'),
            ],
            [
                'category_id' => 4,
                'name' => 'Bitacoras',
                'slug' => Str::slug('Bitacoras'),
            ],
            [
                'category_id' => 4,
                'name' => 'Papel canson',
                'slug' => Str::slug('Papel canson'),
            ],
            [
                'category_id' => 4,
                'name' => 'Papeles de colores',
                'slug' => Str::slug('Papeles de colores'),
                'color' => true,
            ],
            [
                'category_id' => 4,
                'name' => 'Cartulinas de colores',
                'slug' => Str::slug('Cartulinas de colores'),
                'color' => true,
            ],
            [
                'category_id' => 4,
                'name' => 'Cartulinas profesionales',
                'slug' => Str::slug('Cartulinas profesionales'),
                'color' => true,
            ],
            [
                'category_id' => 4,
                'name' => 'Cartulinas semi-profesionales',
                'slug' => Str::slug('Cartulinas semi-profesionales'),
                'color' => true,
            ],

            /* MARCADORES */
            [
                'category_id' => 5,
                'name' => 'Marcadores profesionales',
                'slug' => Str::slug('Marcadores profesionales'),
                'color' => true,
            ],
            [
                'category_id' => 5,
                'name' => 'Marcadores semi-profesionales',
                'slug' => Str::slug('Marcadores semi-profesionales'),
                'color' => true,
            ],
            [
                'category_id' => 5,
                'name' => 'Marcadores punta fina',
                'slug' => Str::slug('Marcadores punta fina'),
                'color' => true,
            ],
            [
                'category_id' => 5,
                'name' => 'Marcadores punta gruesa',
                'slug' => Str::slug('Marcadores punta gruesa'),
                'color' => true,
            ],
            [
                'category_id' => 5,
                'name' => 'Marcadores tinta de tempera',
                'slug' => Str::slug('Marcadores tinta de tempera'),
                'color' => true,
            ],

            /* MISCELANEA */
            [
                'category_id' => 6,
                'name' => 'Utiles escolares',
                'slug' => Str::slug('Utiles escolares'),
            ],
            [
                'category_id' => 6,
                'name' => 'Articulos de oficina',
                'slug' => Str::slug('Articulos de oficina'),
            ],
            [
                'category_id' => 6,
                'name' => 'Esculturas',
                'slug' => Str::slug('Esculturas'),
            ],
            [
                'category_id' => 6,
                'name' => 'Caballetes',
                'slug' => Str::slug('Caballetes'),
            ],
            [
                'category_id' => 6,
                'name' => 'Pizarras',
                'slug' => Str::slug('Pizarras'),
            ],
        ];

        foreach ($sub as $i) {
            Subcategory::factory(1)->create($i);
        }
    }
}
