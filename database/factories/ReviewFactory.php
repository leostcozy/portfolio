<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Shop;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\Review;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Review::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory()->create()->id,
            'shop_id' => Shop::factory()->create()->id,
            'title' => $this->faker->sentence,
            'body' => $this->faker->paragraph,
            'star' => rand(1, 5),
            'visit_date' => now(),
            'amount_spent' => rand(100, 500),
            'introduction' => $this->faker->sentence,
            'image' => Str::random(10).'.jpg',
            'deleted_at' => null, // ソフトデリートが適用されていない場合のデフォルト値
        ];
    }
}
