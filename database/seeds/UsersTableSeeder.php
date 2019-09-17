<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Frederico Borges',
            'email' => 'frederico.borges@fred.com',
            'password' => bcrypt('123456'),
        ]);
        DB::table('eventos')->insert([
            'nome' => 'Seminário Racismo estrutural',
            'descricao' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'dataEvento' => '2019-08-30',
            'moderador' => 1,
            'ativo' => true,
        ]);
    }
}
