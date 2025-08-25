<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run(): void
    {
        // Create roles
        $admin = Role::firstOrCreate(['name' => 'admin']);
        $employee = Role::firstOrCreate(['name' => 'employee']);

        // Create permissions
        $create = Permission::firstOrCreate(['name' => 'create']);
        $update = Permission::firstOrCreate(['name' => 'update']);
        $delete = Permission::firstOrCreate(['name' => 'delete']);
        $get = Permission::firstOrCreate(['name' => 'get']);
        $getAll = Permission::firstOrCreate(['name' => 'get-all']);

        $admin->givePermissionTo([$create, $update, $delete, $get, $getAll]);
        $employee->givePermissionTo([$get, $getAll]);
    }
}
