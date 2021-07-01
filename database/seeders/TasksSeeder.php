<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
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
        \DB::table('tasks')
            ->insert($this->generateData());
    }

    public function generateData(): array
    {
        $data = [];

        for ($i = 0; $i < 15; $i++) {
            $data[] = [
                'name' => $this->faker->catchPhrase,
                'description' => $this->faker->realText(),
                'deadline' => $this->faker->dateTime,
                'period' => $this->faker->dateTimeInInterval(),
                'executor_id' => $this->faker->numberBetween(1,10),
                'initiator_id' => $this->faker->numberBetween(1,10),
                'board_id' => $this->faker->numberBetween(1,10),
                'task_topics_id' => $this->faker->numberBetween(1,2),
                'created_at' => $this->faker->dateTime,
                'updated_at' => $this->faker->dateTime,
            ];
        }
        return $data;
    }
}
