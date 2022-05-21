<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        \App\Models\User::factory(30)->create();
        \App\Models\Order::factory(100)->create();

        // \App\Models\User::factory(10)
        //     ->has(
        //         \App\Models\Order::factory()
        //     )
        //     ->create();

    }
}
