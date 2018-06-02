<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        factory('App\User', 10)->create()->each(function ($user) {
            return factory('App\Todo', 1)->create(['users_id' => $user->id]);
        });

        factory('App\User', 1)->create([
            'name' => 'isamu',
            'email' => 'teste@teste.com.br',
            'password' => bcrypt('secret')
        ]);
    }
}
