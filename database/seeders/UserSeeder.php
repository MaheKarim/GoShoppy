<?php
    namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

    class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        User::updateOrCreate([
           'role_id'  => Role::where('slug', 'admin')->first()->id,
            'name'    => 'Admin',
            'email'   => 'admin@mail.com',
            'password' => Hash::make('password'),
            'status'   => true,
        ]);

        User::updateOrCreate([
            'role_id'  => Role::where('slug', 'user')->first()->id,
            'name'    => 'User',
            'email'   => 'user@mail.com',
            'password' => Hash::make('password'),
            'status'   => true,
        ]);
    }
}
