<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

    class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
           'role_id'  => \App\Role::where('slug', 'admin')->first()->id,
            'name'    => 'Admin',
            'email'   => 'admin@mail.com',
            'password' => Hash::make('password'),
        ]);

        User::updateOrCreate([
            'role_id'  => \App\Role::where('slug', 'user')->first()->id,
            'name'    => 'User',
            'email'   => 'user@mail.com',
            'password' => Hash::make('password'),
        ]);
    }
}
