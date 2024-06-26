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
        // Product::factory(15)->create();

        $products = [
            [
                'name' => 'Poco F6',
                'description' => 'paspas kaayo',
                'price' => 45000.00,
                'quantity' => 1
            ],
            [
                'name' => 'Tecno Pova 6',
                'description' => 'gaming phone',
                'price' => 25000.00,
                'quantity' => 1
            ],
       
        ];
        foreach($products as $prod) {
            Product::create($prod);
        }
    }
}
