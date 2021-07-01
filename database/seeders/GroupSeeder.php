<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder
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
        \DB::table('groups')
            ->insert($this->generateData());
    }

    public function generateData(): array
    {
        $data = [];

        for ($i = 0; $i < 12; $i++) {
            $data[] = [
                'name' => $this->faker->unique()->company,
                'created_at'  => $this->faker->dateTime,
                'updated_at'  => $this->faker->dateTime,
            ];
        }
        return $data;
    }

}
