<?php

use Illuminate\Database\Seeder;

class LocalsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('locals')->insert([
            [ 'id' => 1, 'local' => 'Fatec Bauru - Sala 01' ],
            [ 'id' => 2, 'local' => 'Fatec Bauru - Sala 02' ],
            [ 'id' => 3, 'local' => 'Fatec Bauru - Sala 03' ],
            [ 'id' => 4, 'local' => 'Fatec Bauru - Sala 04' ],
            [ 'id' => 5, 'local' => 'Fatec Bauru - Sala 05' ],
            [ 'id' => 6, 'local' => 'Fatec Bauru - Sala 06' ],
            [ 'id' => 7, 'local' => 'Fatec Bauru - Sala 07' ],
            [ 'id' => 8, 'local' => 'Fatec Bauru - Sala 08' ],
            [ 'id' => 9, 'local' => 'Fatec Bauru - Sala 09' ],
            [ 'id' => 10, 'local' => 'Fatec Bauru - Sala 10' ],
            [ 'id' => 11, 'local' => 'Fatec Bauru - Sala 11' ],
            [ 'id' => 12, 'local' => 'Fatec Bauru - Sala 12' ],
            [ 'id' => 13, 'local' => 'Fatec Bauru - Sala 13' ],
            [ 'id' => 14, 'local' => 'Fatec Bauru - Sala 14' ],
            [ 'id' => 15, 'local' => 'Fatec Bauru - Sala 15' ],
            [ 'id' => 16, 'local' => 'Fatec Bauru - Auditório' ],
            [ 'id' => 17, 'local' => 'Fatec Bauru - Lab. Robótica' ],
            [ 'id' => 18, 'local' => 'Fatec Bauru - Lab. Pneumática' ],
        ]);
    }
}
