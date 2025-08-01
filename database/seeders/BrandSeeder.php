<?php

namespace Database\Seeders;

use App\Models\Brand;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Brand::create(
            [
                'name' => 'Dell',
                'slug' => 'dell'
            ]
        );
        Brand::create([
            'name' => 'Lenovo',
            'slug' => 'lenovo'
        ]);
        Brand::create([
            'name' => 'Acer',
            'slug' => 'acer'
        ]);
        Brand::create([
            'name' => 'HP',
            'slug' => 'hp'
        ]);
        Brand::create([
            'name' => 'Apple',
            'slug' => 'apple'
        ]);
        Brand::create([
            'name' => 'Samsung',
            'slug' => 'samsung'
        ]);
        Brand::create([
            'name' => 'Poco',
            'slug' => 'poco'
        ]);
        Brand::create([
            'name' => 'Redmi',
            'slug' => 'redmi'
        ]);
        Brand::create([
            'name' => 'Rolex',
            'slug' => 'rolex'
        ]);
        Brand::create(
            [
                'name' => 'Omega',
                'slug' => 'omega'
            ]
        );
    }
}
