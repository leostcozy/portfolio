<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'username' => $this->faker->name, // $this->fakerを使用
            'email' => $this->faker->safeEmail,
            'email_verified_at' => now(),
            'password' => bcrypt('secret'), // パスワードのハッシュ化
            'description' => $this->faker->text(200), // テキストの生成
            'icon_photo' => $this->faker->imageUrl(), // イメージURLの生成
            'gender' => $this->faker->randomElement(['male', 'female']), // 性別のランダム選択
            'remember_token' => Str::random(10),
            'created_at' => $this->faker->dateTimeBetween('-1 year'), // 日時範囲内の日付・時間の生成
            'updated_at' => $this->faker->dateTimeBetween('-1 year'), 
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
