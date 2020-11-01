<?php
    namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Permission;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        $adminPermissions = Permission::all();
        Role::updateOrCreate([
           'name' => 'Admin',
            'slug' => 'admin',
            'deletable' => false,
        ])->permissions()->sync($adminPermissions->pluck('id'));

        Role::updateOrCreate([
            'name' => 'Stuff',
            'slug' => 'stuff',
            'deletable' => false,
        ]);

        Role::updateOrCreate([
            'name' => 'User',
            'slug' => 'user',
            'deletable' => false,
        ]);
    }
}
