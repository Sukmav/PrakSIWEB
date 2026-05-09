<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = ['Me-o', 'Royal Canin', 'Cleo', 'Whiskas'];
        foreach ($brands as $brand) {
            Brand::create(['nama_brand' => $brand]);
        }
    }
}
