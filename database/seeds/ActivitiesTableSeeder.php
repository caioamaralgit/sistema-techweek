<?php

use Illuminate\Database\Seeder;

class ActivitiesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('activities')->insert([
            [ 'id' => 1, 'locals_id' => 8, 'events_id' => 1, 'title' => 'Internet das Coisas', 'description' => '', 'start' => '2019-05-20 08:00:00', 'end' => '2019-05-20 09:15:00', 'cover' => 'event_1.jpg', 'max_participants' => 30 ],
            [ 'id' => 2, 'locals_id' => 5, 'events_id' => 1, 'title' => 'Otimização de Sites (Ferramentas Google e SEO)', 'description' => '', 'start' => '2019-05-20 21:00:00', 'end' => '2019-05-20 22:15:00', 'cover' => 'event_2.jpg', 'max_participants' => 30 ],
            [ 'id' => 3, 'locals_id' => 7, 'events_id' => 1, 'title' => 'Kotlin e Tecnologias Android', 'description' => '', 'start' => '2019-05-20 19:15:00', 'end' => '2019-05-20 20:30:00', 'cover' => 'event_1.jpg', 'max_participants' => 20 ],
            [ 'id' => 4, 'locals_id' => 12, 'events_id' => 1, 'title' => 'Desenvolvimento para Realidade Virtual', 'description' => '', 'start' => '2019-05-20 09:45:00', 'end' => '2019-05-20 11:00:00', 'cover' => 'event_1.jpg', 'max_participants' => 20 ],
            [ 'id' => 5, 'locals_id' => 10, 'events_id' => 1, 'title' => 'Choque Elétrico', 'description' => '', 'start' => '2019-05-20 19:15:00', 'end' => '2019-05-20 20:30:00', 'cover' => 'event_1.jpg', 'max_participants' => 20 ],
            [ 'id' => 6, 'locals_id' => 14, 'events_id' => 1, 'title' => 'Machine Learning - Classificação de Dados, Algoritmo e Aplicação', 'description' => '', 'start' => '2019-05-20 19:15:00', 'end' => '2019-05-20 20:30:00', 'cover' => 'event_1.jpg', 'max_participants' => 20 ],
            [ 'id' => 7, 'locals_id' => 8, 'events_id' => 1, 'title' => 'Manipulação de Carga (Divisão Handling)', 'description' => '', 'start' => '2019-05-20 19:15:00', 'end' => '2019-05-20 20:30:00', 'cover' => 'event_1.jpg', 'max_participants' => 20 ],
            [ 'id' => 8, 'locals_id' => 5, 'events_id' => 1, 'title' => 'Phishing a Monalisa do hacking', 'description' => '', 'start' => '2019-05-20 19:15:00', 'end' => '2019-05-20 20:30:00', 'cover' => 'event_1.jpg', 'max_participants' => 20 ],
            [ 'id' => 9, 'locals_id' => 7, 'events_id' => 1, 'title' => 'O que não te contaram sobre a carreira de Dev', 'description' => '', 'start' => '2019-05-20 19:15:00', 'end' => '2019-05-20 20:30:00', 'cover' => 'event_1.jpg', 'max_participants' => 20 ],
            [ 'id' => 10, 'locals_id' => 12, 'events_id' => 1, 'title' => 'Picking by Voice com Smartphones', 'description' => '', 'start' => '2019-05-20 19:15:00', 'end' => '2019-05-20 20:30:00', 'cover' => 'event_1.jpg', 'max_participants' => 20 ],
            [ 'id' => 11, 'locals_id' => 10, 'events_id' => 1, 'title' => 'CNC nas máquinas operatrizes', 'description' => '', 'start' => '2019-05-20 19:15:00', 'end' => '2019-05-20 20:30:00', 'cover' => 'event_1.jpg', 'max_participants' => 20 ],
            [ 'id' => 12, 'locals_id' => 5, 'events_id' => 1, 'title' => 'Arquitetura Híbrida (Do Backend ao Frontend com .NET Core, Vue.JS, Electron e Docker)', 'description' => '', 'start' => '2019-05-20 19:15:00', 'end' => '2019-05-20 20:30:00', 'cover' => 'event_1.jpg', 'max_participants' => 20 ],
            [ 'id' => 13, 'locals_id' => 12, 'events_id' => 1, 'title' => 'O DNA da Inovação na fonte de inspiração', 'description' => '', 'start' => '2019-05-20 19:15:00', 'end' => '2019-05-20 20:30:00', 'cover' => 'event_1.jpg', 'max_participants' => 20 ],
            [ 'id' => 14, 'locals_id' => 8, 'events_id' => 1, 'title' => 'Comportamento Empreendedor', 'description' => '', 'start' => '2019-05-20 19:15:00', 'end' => '2019-05-20 20:30:00', 'cover' => 'event_1.jpg', 'max_participants' => 20 ],
            [ 'id' => 15, 'locals_id' => 5, 'events_id' => 1, 'title' => 'Object Relational Mapping Com JPA', 'description' => '', 'start' => '2019-05-20 19:15:00', 'end' => '2019-05-20 20:30:00', 'cover' => 'event_1.jpg', 'max_participants' => 20 ],
            [ 'id' => 16, 'locals_id' => 7, 'events_id' => 1, 'title' => 'RestFul x SOAP: Qual o melhor método para integração entre aplicativos?', 'description' => '', 'start' => '2019-05-20 19:15:00', 'end' => '2019-05-20 20:30:00', 'cover' => 'event_1.jpg', 'max_participants' => 20 ],
            [ 'id' => 17, 'locals_id' => 12, 'events_id' => 1, 'title' => 'Scrum - Theory', 'description' => '', 'start' => '2019-05-20 19:15:00', 'end' => '2019-05-20 20:30:00', 'cover' => 'event_1.jpg', 'max_participants' => 20 ],
            [ 'id' => 18, 'locals_id' => 16, 'events_id' => 1, 'title' => 'Bomba de infusão de duplo canais', 'description' => '', 'start' => '2019-05-20 19:15:00', 'end' => '2019-05-20 20:30:00', 'cover' => 'event_1.jpg', 'max_participants' => 20 ],
            [ 'id' => 19, 'locals_id' => 17, 'events_id' => 1, 'title' => 'Sistema Flexível de Manufatura', 'description' => '', 'start' => '2019-05-20 19:15:00', 'end' => '2019-05-20 20:30:00', 'cover' => 'event_1.jpg', 'max_participants' => 20 ],
            [ 'id' => 20, 'locals_id' => 18, 'events_id' => 1, 'title' => 'Rede Profibus entre CLPs (nível controle)', 'description' => '', 'start' => '2019-05-20 19:15:00', 'end' => '2019-05-20 20:30:00', 'cover' => 'event_1.jpg', 'max_participants' => 20 ],
        ]);
    }
}
