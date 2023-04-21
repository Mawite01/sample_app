<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

// use Spatie\Permission\Contracts\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $admin = User::create([
            'name' => 'Sophia',
            'email' => 'thangneimawi@gmail.com',
            'password' => Hash::make('asdf1234')
        ]);
        
        $editor = User::create([
            'name' => 'Editor',
            'email' => 'editor@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        $admin->assignRole('SuperAdmin'); 
        $editor->assignRole('Editor');       

    }
}
