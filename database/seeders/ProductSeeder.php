<?php

namespace Database\Seeders;

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
        Product::create([
            'title' => 'Latitude C400',
            'description' => 'ipsum dolor sit amet consectetur adipisicing elit. Consequuntur natus dolor quas hic expedita perferendis ea similique quaerat fugiat deleniti debitis tempore, impedit molestias at libero officiis nemo corporis voluptas?',
            'quantity' => 20,
            'price' => 39.99,
            'created_by' => 1,
            'brand_id' => 1,
            'category_id' => 1,
        ]);
        Product::create([
            'title' => 'ThinkPad T',
            'description' => 'ipsum dolor sit amet consectetur adipisicing elit. Consequuntur natus dolor quas hic expedita perferendis ea similique quaerat fugiat deleniti debitis tempore, impedit molestias at libero officiis nemo corporis voluptas?',
            'quantity' => 0,
            'price' => 45.99,
            'created_by' => 1,
            'brand_id' => 2,
            'category_id' => 1,
        ]);
        Product::create([
            'title' => 'Latitude 3550',
            'description' => 'ipsum dolor sit amet consectetur adipisicing elit. Consequuntur natus dolor quas hic expedita perferendis ea similique quaerat fugiat deleniti debitis tempore, impedit molestias at libero officiis nemo corporis voluptas?',
            'quantity' => 0,
            'price' => 39.99,
            'created_by' => 1,
            'brand_id' => 1,
            'category_id' => 1,
        ]);
        Product::create([
            'title' => 'Aspire3 A3',
            'description' => 'ipsum dolor sit amet consectetur adipisicing elit. Consequuntur natus dolor quas hic expedita perferendis ea similique quaerat fugiat deleniti debitis tempore, impedit molestias at libero officiis nemo corporis voluptas?',
            'quantity' => 0,
            'price' => 22.99,
            'created_by' => 1,
            'brand_id' => 3,
            'category_id' => 1,
        ]);
        Product::create([
            'title' => 'Pavillon 72',
            'description' => 'ipsum dolor sit amet consectetur adipisicing elit. Consequuntur natus dolor quas hic expedita perferendis ea similique quaerat fugiat deleniti debitis tempore, impedit molestias at libero officiis nemo corporis voluptas?',
            'quantity' => 30,
            'price' => 50.99,
            'created_by' => 1,
            'brand_id' => 4,
            'category_id' => 1,
        ]);
        Product::create([
            'title' => 'Iphone 14 Pro Max',
            'description' => 'ipsum dolor sit amet consectetur adipisicing elit. Consequuntur natus dolor quas hic expedita perferendis ea similique quaerat fugiat deleniti debitis tempore, impedit molestias at libero officiis nemo corporis voluptas?',
            'quantity' => 3,
            'price' => 45.99,
            'created_by' => 1,
            'brand_id' => 5,
            'category_id' => 2,
        ]);
        Product::create([
            'title' => 'GalaxyA16',
            'description' => 'ipsum dolor sit amet consectetur adipisicing elit. Consequuntur natus dolor quas hic expedita perferendis ea similique quaerat fugiat deleniti debitis tempore, impedit molestias at libero officiis nemo corporis voluptas?',
            'quantity' => 15,
            'price' => 65.99,
            'created_by' => 1,
            'brand_id' => 6,
            'category_id' => 2,
        ]);
        Product::create([
            'title' => 'Galaxy A53',
            'description' => 'ipsum dolor sit amet consectetur adipisicing elit. Consequuntur natus dolor quas hic expedita perferendis ea similique quaerat fugiat deleniti debitis tempore, impedit molestias at libero officiis nemo corporis voluptas?',
            'quantity' => 22,
            'price' => 62.99,
            'created_by' => 1,
            'brand_id' => 6,
            'category_id' => 2,
        ]);
        Product::create([
            'title' => 'M6 Pro',
            'description' => 'ipsum dolor sit amet consectetur adipisicing elit. Consequuntur natus dolor quas hic expedita perferendis ea similique quaerat fugiat deleniti debitis tempore, impedit molestias at libero officiis nemo corporis voluptas?',
            'quantity' => 2,
            'price' => 75.99,
            'created_by' => 1,
            'brand_id' => 7,
            'category_id' => 2,
        ]);
        Product::create([
            'title' => 'Note 13 Pro',
            'description' => 'ipsum dolor sit amet consectetur adipisicing elit. Consequuntur natus dolor quas hic expedita perferendis ea similique quaerat fugiat deleniti debitis tempore, impedit molestias at libero officiis nemo corporis voluptas?',
            'quantity' => 7,
            'price' => 15.99,
            'created_by' => 1,
            'brand_id' => 8,
            'category_id' => 2,
        ]);
        Product::create([
            'title' => 'Omega 1',
            'description' => 'ipsum dolor sit amet consectetur adipisicing elit. Consequuntur natus dolor quas hic expedita perferendis ea similique quaerat fugiat deleniti debitis tempore, impedit molestias at libero officiis nemo corporis voluptas?',
            'quantity' => 3,
            'price' => 17.99,
            'created_by' => 1,
            'brand_id' => 10,
            'category_id' => 3,
        ]);
        Product::create([
            'title' => 'Omega 2',
            'description' => 'ipsum dolor sit amet consectetur adipisicing elit. Consequuntur natus dolor quas hic expedita perferendis ea similique quaerat fugiat deleniti debitis tempore, impedit molestias at libero officiis nemo corporis voluptas?',
            'quantity' => 3,
            'price' => 19.99,
            'created_by' => 1,
            'brand_id' => 10,
            'category_id' => 3,
        ]);
        Product::create([
            'title' => 'Sky Dweller',
            'description' => 'ipsum dolor sit amet consectetur adipisicing elit. Consequuntur natus dolor quas hic expedita perferendis ea similique quaerat fugiat deleniti debitis tempore, impedit molestias at libero officiis nemo corporis voluptas?',
            'quantity' => 3,
            'price' => 80.99,
            'created_by' => 1,
            'brand_id' => 9,
            'category_id' => 3,
        ]);
        Product::create([
            'title' => 'Lady Datejust',
            'description' => 'ipsum dolor sit amet consectetur adipisicing elit. Consequuntur natus dolor quas hic expedita perferendis ea similique quaerat fugiat deleniti debitis tempore, impedit molestias at libero officiis nemo corporis voluptas?',
            'quantity' => 3,
            'price' => 84.99,
            'created_by' => 1,
            'brand_id' => 9,
            'category_id' => 3,
        ]);
        Product::create([
            'title' => 'Sumariner',
            'description' => 'ipsum dolor sit amet consectetur adipisicing elit. Consequuntur natus dolor quas hic expedita perferendis ea similique quaerat fugiat deleniti debitis tempore, impedit molestias at libero officiis nemo corporis voluptas?',
            'quantity' => 3,
            'price' => 89.99,
            'created_by' => 1,
            'brand_id' => 9,
            'category_id' => 3,
        ]);
    }
}
