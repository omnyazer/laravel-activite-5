<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permission = Permission::firstOrCreate([
            'name' => 'view dashboard',
        ]);

        $adminRole = Role::firstOrCreate([
            'name' => 'admin',
        ]);

        $adminRole->givePermissionTo($permission);

        $user = User::where('email', 'admin@example.com')->first();

        if ($user) {
            $user->assignRole($adminRole);
        }
    }
}
