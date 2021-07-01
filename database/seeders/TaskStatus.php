<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;

class TaskStatus extends Seeder
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
        \DB::table('task_statuses')
            ->insert($this->generateData());
    }

    public function generateData(): array
    {
        $data = [];

        for ($i = 0; $i < 5; $i++) {
            $status = ['Planned', 'Accepted', 'Completed', 'Canceled', 'On Control'];
            $data[] = [
                'name' => $status[$i],
                'created_at' => $this->faker->dateTime,
                'updated_at' => $this->faker->dateTime,
            ];
        }
        return $data;
    }
}
