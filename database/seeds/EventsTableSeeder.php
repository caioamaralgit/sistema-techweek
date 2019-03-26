<?php

use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('events')->insert([
            [ 'id' => 1, 'event' => 'TechWeek III', 'description' => 'A TechWeek é um evento que ocorre duas vezes ao ano, com o objetivo de aproximar alunos e empresas, através de palestrar e minicursos', 'cover' => 'techweek.jpg' ],
            [ 'id' => 2, 'event' => 'TechDay VI', 'description' => 'O TechDay tem como objetivo aproximar os alunos, empresas e comunidade de tecnologia através de palestras e minicursos voltados para as áreas de ensino da Fatec Bauru: Automação Industrial, Banco de Dados, Gestão Empresaria, Redes de Computadores e Sistemas Biomédicos', 'cover' => 'techday.jpg' ],
        ]);
    }
}
