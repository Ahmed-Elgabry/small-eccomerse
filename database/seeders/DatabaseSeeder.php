<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Merchant;
use App\Models\Product;
use App\Models\Store;
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
        Category::factory(6)->create();
        Store::factory(6)->create();
        Merchant::factory(6)->create();
        Product::factory(16)->create();
        // \App\Models\User::factory(10)->create();
    }
}
