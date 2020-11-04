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
            'phone_number' => '+8801778966356',
            'state_name' => 'Dhaka',
            'current_country' => 'Bangladesh',
            'deposit_balance' => '0',
            'status'   => true,
        ]);

        User::updateOrCreate([
            'role_id'  => Role::where('slug', 'stuff')->first()->id,
            'name'    => 'Stuff',
            'email'   => 'stuff@mail.com',
            'password' => Hash::make('password'),
            'phone_number' => '+8801778966355',
            'state_name' => 'Dhaka',
            'current_country' => 'Bangladesh',
            'deposit_balance' => '0',
            'status'   => true,
        ]);
        User::updateOrCreate([
            'role_id'  => Role::where('slug', 'user')->first()->id,
            'name'    => 'User',
            'email'   => 'user@mail.com',
            'password' => Hash::make('password'),
            'phone_number' => '+8801303062727',
            'state_name' => 'Dhaka',
            'current_country' => 'Bangladesh',
            'deposit_balance' => '0',
            'status'   => true,
        ]);
    }
}
