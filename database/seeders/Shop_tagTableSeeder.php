<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tag;
use App\Models\Shop;

class ShopTagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ショップとタグの結びつけを行う
        // ここでは仮定に基づいて`shop_tags`テーブルを使用しています
        // 実際のテーブル名やカラム名は、あなたのデータベース設計に合わせて変更してください
        DB::table('shop_tags')->insert([
            ['shop_id' => 1, 'tag_id' => 1],
            ['shop_id' => 1, 'tag_id' => 2],
            ['shop_id' => 2, 'tag_id' => 3],
            // 他のショップとタグの組み合わせ...
        ]);
    }
}
