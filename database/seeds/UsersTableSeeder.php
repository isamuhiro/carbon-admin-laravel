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
        factory('App\User', 1)->create();
        App\User::create([
            'name' => 'John Doe',
            'email' => 'admin@admin.com.br',
            'password' => bcrypt('secret'),
            'remember_token' => str_random(10)
        ]);
    }
}
