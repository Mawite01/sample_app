<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = Role::create(['name' => 'SuperAdmin']);
        $editor      = Role::create(['name' => 'Editor']);
        
        $dashboard = Permission::create(['name' => 'dashboard']);
        $widget    = Permission::create(['name' => 'widget']);
        $blog_list = Permission::create(['name' => 'blogList']);
        
        $super_admin->givePermissionTo([$dashboard,$widget,$blog_list]);
        $editor->givePermissionTo($blog_list);

    }
}
