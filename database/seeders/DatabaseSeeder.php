<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        if (config('app.env') == 'local') {
            $this->call(UsersTableSeeder::class);
            $this->call(FollowsTableSeeder::class);
            $this->call(CategoriesTableSeeder::class);
            $this->call(ShopsTableSeeder::class);
        }
    }
}