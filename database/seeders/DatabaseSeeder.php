<?php

    namespace Database\Seeders;

use App\Models\CourierType;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(PermissionSeeder::class);
         $this->call(RoleSeeder::class);
         $this->call(UserSeeder::class);
         $this->call(USAddressSeeder::class);
         $this->call(StatusSeeder::class);
         $this->call(FAQSeeder::class);
         $this->call(CourierType::class);
    }
}
