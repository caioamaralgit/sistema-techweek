<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            [ 'id' => 1, 'name' => 'Caio Amaral', 'email' => 'cbarreto_sud@hotmail.com', 'password' => bcrypt('admin'), 'admin' => true, 'remember_token' => null, 'created_at' => '2019-03-13 22:12:34', 'updated_at' => null, 'email_verified_at' => '2019-03-13 22:15:02' ],
            [ 'id' => 2, 'name' => 'Eduardo Biazotto', 'email' => 'neves98@outlook.com', 'password' => bcrypt('admin'), 'admin' => true, 'remember_token' => null, 'created_at' => '2019-03-13 22:16:21', 'updated_at' => null, 'email_verified_at' => '2019-03-13 22:17:07' ],
            [ 'id' => 3, 'name' => 'Raul Marciano', 'email' => 'raul_marciano@outlook.com', 'password' => bcrypt('admin'), 'admin' => true, 'remember_token' => null, 'created_at' => '2019-03-13 22:16:21', 'updated_at' => null, 'email_verified_at' => '2019-03-20 20:09:07' ],
            [ 'id' => 4, 'name' => 'Claudines Torres', 'email' => 'claudines.torres@fatec.sp.gov.br', 'password' => bcrypt('123456'), 'admin' => false, 'remember_token' => null, 'created_at' => '2019-03-13 22:18:11', 'updated_at' => null, 'email_verified_at' => '2019-03-13 22:19:12' ],
            [ 'id' => 5, 'name' => 'Rafael Maques', 'email' => 'rafael@mail.com', 'password' => bcrypt('123456'), 'admin' => false, 'remember_token' => null, 'created_at' => '2019-03-13 22:12:34', 'updated_at' => null, 'email_verified_at' => null ],
        ]);
    }
}
