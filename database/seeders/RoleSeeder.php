<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::create(['name'=>'admin']);
        $role_editor = Role::create(['name'=>'editor']);

        $permission_create_role = Permission::create(['name'=>'create roles']);
        $permission_update_role = Permission::create(['name'=>'update roles']);
        $permission_delete_role = Permission::create(['name'=>'delete roles']);
        $permission_read_role = Permission::create(['name'=>'read roles']);

        $permisson_create_lesson = Permission::create(['name'=>'create lessons']);
        $permisson_read_lesson = Permission::create(['name'=>'read lessons']);
        $permisson_update_lesson = Permission::create(['name'=>'update lessons']);
        $permisson_delete_lesson = Permission::create(['name'=>'delete lessons']);

        $permisson_create_category = Permission::create(['name'=>'create categories']);
        $permisson_read_category = Permission::create(['name'=>'read categories']);
        $permisson_update_category = Permission::create(['name'=>'update categories']);
        $permisson_delete_category = Permission::create(['name'=>'delete categories']);

        $permissions_admin = [$permission_create_role, $permission_update_role, $permission_delete_role, $permission_read_role, $permisson_create_lesson, $permisson_read_lesson, $permisson_update_lesson, $permisson_delete_lesson, $permisson_create_category, $permisson_read_category, $permisson_update_category, $permisson_delete_category];
        $permissions_editor = [$permisson_create_lesson, $permisson_read_lesson, $permisson_update_lesson, $permisson_delete_lesson, $permisson_create_category, $permisson_read_category, $permisson_update_category, $permisson_delete_category];
    }
}
