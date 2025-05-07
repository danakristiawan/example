<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Flight;
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

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $permissions = [
           'read',
        ];
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
        $user = User::create([
            'name' => 'Paijo', 
            'email' => 'paijo@gmail.com',
            'password' => bcrypt('123456')
        ]);
        $role = Role::create(['name' => 'User']);
        $permissions = Permission::pluck('id','id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
