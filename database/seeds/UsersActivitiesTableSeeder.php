<?php

use Illuminate\Database\Seeder;

class UsersActivitiesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users_activities')->insert([
            [ 'users_id' => 4, 'activities_id' => 1, 'hash' => '', 'present' => false ],
            [ 'users_id' => 4, 'activities_id' => 2, 'hash' => '', 'present' => false ],
            [ 'users_id' => 4, 'activities_id' => 3, 'hash' => '', 'present' => false ],
            [ 'users_id' => 4, 'activities_id' => 4, 'hash' => '', 'present' => false ],
            [ 'users_id' => 5, 'activities_id' => 5, 'hash' => '', 'present' => false ],
            [ 'users_id' => 5, 'activities_id' => 6, 'hash' => '', 'present' => false ],
            [ 'users_id' => 5, 'activities_id' => 7, 'hash' => '', 'present' => false ],
        ]);
    }
}
