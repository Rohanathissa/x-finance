<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        \App\Models\Role::create(['name'=>'admin']);
        \App\Models\Role::create(['name'=>'moderator']);
        \App\Models\Role::create(['name'=>'user']);
        \App\Models\Role::create(['name' => 'editor']);



        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // Create permissions
        \App\Models\Permission::create(['name' => 'create post']);
        \App\Models\Permission::create(['name' => 'edit post']);
//        Permission::create(['name' => 'create post']);
//        Permission::create(['name' => 'edit post']);
    }
}
