<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'email' => 'lucas.assuncao@freicarlosvicuna.com.br',
            'email_sup' => 'lucasdesousa19@hotmail.com',
            'email_secretary' => 'lucas.sousa.web@gmail.com',
            'name' => 'Lucas de Sousa Assunção',
            'password' => Hash::make('10309785650'),
            'profile' => 'ADMINISTRADOR',
            'created_at' => date('Y-m-d H:i'),
            'updated_at' => date('Y-m-d H:i'),

        ]);
    }
}
