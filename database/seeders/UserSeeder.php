<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /** @var Generator */
    protected $faker;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Generator $faker)
    {
        $this->faker = $faker;
        \DB::table('users')
            ->insert($this->generateData());
    }

    public function generateData(): array
    {
        $data = [];

        for ($i = 0; $i < 10; $i++) {
            $data[] = [
                'name' => $this->faker->name,
                'email' => $this->faker->unique()->email,
                'password' => Hash::make('password'),
                'phone' => $this->faker->unique()->e164PhoneNumber,
                'created_at' => $this->faker->dateTime,
            ];
        }
        return $data;
    }
}
