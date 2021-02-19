<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i =0 ;$i < 11 ;$i++){
            $product = new Product();
            $product->name = "product $i";
            $product->price = rand(1000 , 10000);
            $product->desc = "product desc $i";

            $product->save();
        }
    }
}
