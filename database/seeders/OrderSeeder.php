<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        // Ambil semua ID produk
        $products = Product::pluck('id')->toArray();

        foreach (range(1, 50) as $index) {
            Order::create([
                'transaction_id' => $faker->unique()->uuid,
                'product_id' => $faker->randomElement($products),
                'payment_status' => $faker->randomElement(['processing', 'completed']),
            ]);
        }
    }
}
