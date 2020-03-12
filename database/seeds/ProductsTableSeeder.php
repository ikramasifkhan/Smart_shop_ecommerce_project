<?php

use App\Models\Product;
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
        factory(Product::class, 20)->create();
        $products = Product ::select('id')->get();

        $url = 'https://lorempixel.com/640/480/?30114';
        foreach($products as $product){
            $product->addMediaFromUrl($url)->toMediaCollection('products');
        }
    }
}
