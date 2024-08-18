<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Product 1',
            'price' => 19.99,
            'details' => 'Product 1 details',
            'image_path' => 'images/product1.jpg',
        ]);

        Product::create([
            'name' => 'Product 2',
            'price' => 29.99,
            'details' => 'Product 2 details',
            'image_path' => 'images/product2.jpg',
        ]);

        
    }
}


