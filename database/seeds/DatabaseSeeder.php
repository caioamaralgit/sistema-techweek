<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            EventsTableSeeder::class,
            LocalsTableSeeder::class,
            SpeakersTableSeeder::class,
            ActivitiesTableSeeder::class,
            SpeakersActivitiesTableSeeder::class,
            UsersActivitiesTableSeeder::class
        ]);
    }
}
