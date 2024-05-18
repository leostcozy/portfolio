<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\Shop;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shop>
 */
class ShopFactory extends Factory
{
    
    public function definition()
    {
        return [
        'name' => $this->faker->name,
        'introduction'=> $this->faker->realText(512),
        'address'=> $this->faker->address(), 
        'post_code'=> $this->faker->postcode(),
        'phone_number' => substr($this->faker->phoneNumber, 0, 20), // 電話番号を最大20文字に制限
        'opening_time' => $this->faker->time('H:i', '23:59'), // 文字列に変換
        'closing_time' => $this->faker->time('H:i', '23:59'), // 文字列に変換
        'regular_holiday' => $this->faker->randomElement(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']),
        'sns_account' => $this->faker->word(),
        'official_website' => $this->faker->url, // URLを生成
        ];
    }
}
