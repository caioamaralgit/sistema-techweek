<?php

use Illuminate\Database\Seeder;

class SpeakersActivitiesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('speakers_activities')->insert([
            [ 'speakers_id' => 1, 'activities_id' => 1 ],
            [ 'speakers_id' => 2, 'activities_id' => 2 ],
            [ 'speakers_id' => 3, 'activities_id' => 3 ],
            [ 'speakers_id' => 4, 'activities_id' => 4 ],
            [ 'speakers_id' => 5, 'activities_id' => 5 ],
            [ 'speakers_id' => 6, 'activities_id' => 6 ],
            [ 'speakers_id' => 7, 'activities_id' => 7 ],
            [ 'speakers_id' => 8, 'activities_id' => 8 ],
            [ 'speakers_id' => 9, 'activities_id' => 9 ],
            [ 'speakers_id' => 10, 'activities_id' => 9 ],
            [ 'speakers_id' => 11, 'activities_id' => 10 ],
            [ 'speakers_id' => 12, 'activities_id' => 11 ],
            [ 'speakers_id' => 13, 'activities_id' => 12 ],
            [ 'speakers_id' => 14, 'activities_id' => 13 ],
            [ 'speakers_id' => 11, 'activities_id' => 14 ],
            [ 'speakers_id' => 15, 'activities_id' => 15 ],
            [ 'speakers_id' => 16, 'activities_id' => 16 ],
            [ 'speakers_id' => 17, 'activities_id' => 17 ],
            [ 'speakers_id' => 18, 'activities_id' => 18 ],
            [ 'speakers_id' => 19, 'activities_id' => 19 ],
            [ 'speakers_id' => 20, 'activities_id' => 20 ],
        ]);
    }
}
