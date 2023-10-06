<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            ProductSeeder::class,
            CategorySeeder::class,
            OrderSeeder::class,
        ]);
//        \App\Models\User::factory(10)->create();
//        \App\Models\Category::factory(10)->create();
//        \App\Models\Product::factory(10)->create();
//        \App\Models\Order::factory(10)->create();
    }
}
