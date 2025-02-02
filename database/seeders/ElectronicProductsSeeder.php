<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ElectronicProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $productTypes = ['Phone', 'Tablet', 'Laptop', 'Headphones & sound'];
        for($i = 0; $i < 50; $i++){
            Product::create([
                'name' => fake()->name(),
                'sku' => 'PROD-' . strtoupper(fake()->lexify('????')) . '-' . fake()->unique()->numberBetween(1000, 9999), // Generate SKU
                'price' => fake()->randomFloat(2, 10, 500), // Random price
                'product_type' => $productTypes[array_rand($productTypes)],
                'description' => fake()->paragraph(3), // Generates a random product description (3 paragraphs)
                'image' => fake()->image(),

            ]);
        }
    }
}
