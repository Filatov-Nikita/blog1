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
            'name' => 'nikita522',
            'email' => 'nekit_040498@mail.ru',
            'password' => bcrypt('987412365ru'),
            'registration_status' => 1
        ]);
    }
}
