<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use App\Models\Follow;

class FollowsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('follows')->insert([
                'follower_id' => 1,
                'followee_id' => 2,
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}
