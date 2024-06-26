<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Product::factory(5)->create();

        $products = [
            [
                'name' => 'UltraHD 4K Television',
                'desc' => 'Enjoy stunning clarity and vibrant colors with this smart 4K TV.',
                'price' => 45000.00,
                'qty' => 1
            ],
            [
                'name' => 'Eco-Friendly Bamboo Toothbrush',
                'desc' => 'A sustainable bamboo toothbrush with soft, BPA-free bristles.',
                'price' => 250.00,
                'qty' => 1
            ],
            [
                'name' => 'Wireless Noise-Canceling Headphones',
                'desc' => 'High-quality sound with active noise cancellation and long battery life.',
                'price' => 10000.00,
                'qty' => 1
            ],
            [
                'name' => 'Smart Fitness Tracker',
                'desc' => 'Track your heart rate, steps, and sleep with this water-resistant device.',
                'price' => 2500.00,
                'qty' => 1
            ],
            [
                'name' => 'Aromatherapy Essential Oil Diffuser',
                'desc' => 'Create a calming atmosphere with multiple mist settings and LED lights.',
                'price' => 1500.00,
                'qty' => 1
            ],
        ];
        foreach($products as $prod) {
            Product::create($prod);
        }
    }
}
