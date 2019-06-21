<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Juan',
            'email' => 'hola@programacionymas.com',
            'password' => bcrypt('123456')
        ]);
        User::create([
            'name' => 'Carlos',
            'email' => 'carlos@programacionymas.com',
            'password' => bcrypt('123456')
        ]);
    }
}
