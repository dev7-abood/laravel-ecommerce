<?php

namespace Database\Seeders;

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
         \App\Models\User::factory()->count(1)->create();

        \App\Models\Brand::factory()->count(1)->create();
        \App\Models\ProductCategory::factory()->count(1)->create();


//        \App\Models\ProductCategory::factory()
//            ->has(\App\Models\Brand::factory()->count(4))
//            ->create();

//        \App\Models\Brand::factory()
//            ->has(\App\Models\ProductCategory::factory(4))
//            ->create();

//        \App\Models\Tax::factory()->count(1)->create();

//        \App\Models\Product::factory()->count(1)->create();

    }
}
