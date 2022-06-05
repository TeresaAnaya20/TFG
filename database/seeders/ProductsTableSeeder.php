<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Pendientes medianos',
            'slug' => 'pendientes-medianos',
            'details' => 'Pendientes de cerámica',
            'price' => 20,
            'shipping_cost' => 2,
            'description' => 'Pendientes de cerámica',
            'category_id' => 1,
            'brand_id' => 1,
            'image_path' => 'pendientes.png'
        ]);

        Product::create([
            'name' => 'Pendientes pequeños',
            'slug' => 'pendientes-pequeños',
            'details' => 'Pendientes de cerámica',
            'price' => 20,
            'shipping_cost' => 2,
            'description' => 'Pendientes de cerámica',
            'category_id' => 1,
            'brand_id' => 2,
            'image_path' => 'pendientes.png'
        ]);

        Product::create([
            'name' => 'Pendientes grandes',
            'slug' => 'pendientes-grandes',
            'details' => 'Pendientes de cerámica',
            'price' => 20,
            'shipping_cost' => 2,
            'description' => 'Pendientes de cerámica',
            'category_id' => 1,
            'brand_id' => 3,
            'image_path' => 'pendientes.png'
        ]);
    }
}
