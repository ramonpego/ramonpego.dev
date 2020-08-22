<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::query()->create([
            'name'=>'Ramon PẼgo',
            'email'=>'ramon.pego.stl@gmail.com',
            'password'=>\Hash::make('35113511')
        ]);
    }
}
