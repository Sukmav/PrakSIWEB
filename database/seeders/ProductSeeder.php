<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['nama_produk' => 'Me-o Cat Food', 'category_id' => 1, 'brand_id' => 1],
            ['nama_produk' => 'Vitamin Kucing', 'category_id' => 3, 'brand_id' => 1],
            ['nama_produk' => 'Obat Cacing', 'category_id' => 3, 'brand_id' => 2],
            ['nama_produk' => 'Mainan Kucing Bola', 'category_id' => 4, 'brand_id' => 3],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
