<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    public function run()
    {
        // Create permissions
        Permission::create(['name' => 'edit articles']);
        Permission::create(['name' => 'delete articles']);
        Permission::create(['name' => 'publish articles']);
        Permission::create(['name' => 'unpublish articles']);

        // Create roles and assign created permissions
        $role = Role::create(['name' => 'writer']);
        $role->givePermissionTo('edit articles');

        $role = Role::create(['name' => 'admin']);
        $role->givePermissionTo(Permission::all());
    }
}