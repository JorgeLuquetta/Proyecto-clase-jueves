<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product1 = new Product();
        $product1->name = 'Laptop gamer';
        $product1->description = "Esta es la descripción de la laptop gamer";
        $product1->price = 1500.00;
        $product1->category_id = Category::inRandomOrder()->first()->id;

        $product1->save();

        $product2 = new Product();
        $product2->name = 'Tablet';
        $product2->description = "Esta es la descripción de la tablet";
        $product2->price = 800.00;
        $product2->category_id = Category::inRandomOrder()->first()->id;

        $product2->save();

        $product3 = new Product();
        $product3->name = 'Teclado gamer RGB';
        $product3->description = "Esta es la descripción del Teclado gamer RGB";
        $product3->price = 200.00;
        $product3->category_id = Category::inRandomOrder()->first()->id;

        $product3->save();
    }
}
