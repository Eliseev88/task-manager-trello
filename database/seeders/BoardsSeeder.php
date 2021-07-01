<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;

class BoardsSeeder extends Seeder
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
        \DB::table('boards')
            ->insert($this->generateData());
    }

    public function generateData(): array
    {
        $data = [];

        for ($i = 0; $i < 20; $i++) {
            $data[] = [
                'name' => $this->faker->catchPhrase,
                'created_at' => $this->faker->dateTime,
                'updated_at' => $this->faker->dateTime,
                'group_id' => $this->faker->numberBetween(1,10),
            ];
        }
        return $data;
    }
}
