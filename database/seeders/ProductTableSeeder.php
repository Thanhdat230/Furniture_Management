<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
           'name'=>'Sofa da chữ L',
            'price'=>'10500000',
            'feature_image'=>'picture01.jpg'
        ]);
    }
}
