<?php

use Illuminate\Database\Seeder;
use App\Record;
class RecordTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 10; $i++) {
            Record::create([
                'title' => $faker->sentence
            ]);
        }
    }
}
