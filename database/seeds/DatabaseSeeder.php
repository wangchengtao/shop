<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        // 放在 ProductsSeeder 之前
        $this->call(CategoriesSeeder::class);
        $this->call(ProductsSeeder::class);
    }
}
