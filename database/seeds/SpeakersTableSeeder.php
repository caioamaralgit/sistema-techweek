<?php

use Illuminate\Database\Seeder;

class SpeakersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('speakers')->insert([
            [ 'id' => 1, 'name' => 'Sidney José Laureano Soares - Senai', 'photo' => 'speaker.jpg' ],
            [ 'id' => 2, 'name' => 'Robson Fernando Rodrigues Carmona - Gálata', 'photo' => 'speaker.jpg' ],
            [ 'id' => 3, 'name' => 'Victor Hugo Braz de Oliveira - eSapiens', 'photo' => 'speaker.jpg' ],
            [ 'id' => 4, 'name' => 'Gabriel Naro - Zeon Studios', 'photo' => 'speaker.jpg' ],
            [ 'id' => 5, 'name' => 'Valdecir Cruz Martins - CPFL', 'photo' => 'speaker.jpg' ],
            [ 'id' => 6, 'name' => 'Jonathan de Souza - Lecom', 'photo' => 'speaker.jpg' ],
            [ 'id' => 7, 'name' => 'Tatiana Silvino - MICRO Automação', 'photo' => 'speaker.jpg' ],
            [ 'id' => 8, 'name' => 'João Paulo da Cunha Freire - CrowLabs', 'photo' => 'speaker.jpg' ],
            [ 'id' => 9, 'name' => 'Marcos Felipe Nalin Furtado', 'photo' => 'speaker.jpg' ],
            [ 'id' => 10, 'name' => 'Eduardo Henrique Soa', 'photo' => 'speaker.jpg' ],
            [ 'id' => 11, 'name' => 'Emerson Feitosa - Store Automação', 'photo' => 'speaker.jpg' ],
            [ 'id' => 12, 'name' => 'Luiz Ally - TryAlly Laboratório', 'photo' => 'speaker.jpg' ],
            [ 'id' => 13, 'name' => 'Jaime Eugenio - Lecom', 'photo' => 'speaker.jpg' ],
            [ 'id' => 14, 'name' => 'Eduardo Martins Morgado - LTIA Unesp', 'photo' => 'speaker.jpg' ],
            [ 'id' => 15, 'name' => 'Valeria Cristina Beltrami - SEBRAE', 'photo' => 'speaker.jpg' ],
            [ 'id' => 16, 'name' => 'Filipe Bojikian Rissi - Finch', 'photo' => 'speaker.jpg' ],
            [ 'id' => 17, 'name' => 'Adriano Múfalo - Alternativa Sistemas', 'photo' => 'speaker.jpg' ],
            [ 'id' => 18, 'name' => 'Paulo Henrique de Araujo - Arca Solutions', 'photo' => 'speaker.jpg' ], 
            [ 'id' => 19, 'name' => 'Robson Fernando Rodrigues Carmona - Gálata', 'photo' => 'speaker.jpg' ], 
            [ 'id' => 20, 'name' => 'Lucas Morete Calvacanti - EQMED', 'photo' => 'speaker.jpg' ], 
            [ 'id' => 21, 'name' => 'Tiago Vicentin - Fatec Bauru', 'photo' => 'speaker.jpg' ], 
            [ 'id' => 22, 'name' => 'Edson Mancuzo - Fatec Bauru', 'photo' => 'speaker.jpg' ], 
        ]);
    }
}
