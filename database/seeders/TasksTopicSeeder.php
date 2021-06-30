<?php

namespace Database\Seeders;

use Faker\Generator;
use Illuminate\Database\Seeder;

class TasksTopicSeeder extends Seeder
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
        \DB::table('task_topics')
            ->insert($this->generateData());
    }

    public function generateData(): array
    {
        $data = [];
        for ($i = 2; $i < 10; $i++) {
            $data[] = [
                'name' => $this->faker->catchPhrase,
            ];
        }
        return $data;
    }
}
