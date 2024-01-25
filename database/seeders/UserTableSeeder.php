<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_superadmin = Role::create(['name' => 'superadmin']);
        $role_admin = Role::create(['name' => 'admin']);
        $role_user = Role::create(['name' => 'user']);

        Permission::create(['name' => 'view:role']);
        Permission::create(['name' => 'create:role']);
        Permission::create(['name' => 'edit:role']);
        Permission::create(['name' => 'delete:role']);

        Permission::create(['name' => 'view:permission']);

        Permission::create(['name' => 'view:user']);
        Permission::create(['name' => 'create:user']);
        Permission::create(['name' => 'edit:user']);
        Permission::create(['name' => 'delete:user']);

        $user = new User();
        $user->name = 'SuperAdmin PAYMON';
        $user->email = 'superadmin@paymon.test';
        $user->password = bcrypt('12345678');
        $user->save();

        $user->assignRole($role_superadmin);
    }
}
