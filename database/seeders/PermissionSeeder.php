<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit building']);
        Permission::create(['name' => 'add building']);
        Permission::create(['name' => 'see building']);
        Permission::create(['name' => 'delete building']);

        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider
        $role2 = Role::create(['name' => 'admin']);
        $role2->givePermissionTo('see building');
        $role2->givePermissionTo('add building');
        $role2->givePermissionTo('edit building');
        $role2->givePermissionTo('delete building');

        $role3 = Role::create(['name' => 'guest']);
        $role3->givePermissionTo('see building');

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Super-Admin User',
            'email' => 'superadmin@example.com',
        ]);
        $user->assignRole($role1);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example Admin User',
            'email' => 'admin@example.com',
        ]);
        $user->assignRole($role2);

        $user = \App\Models\User::factory()->create([
            'name' => 'Example guest',
            'email' => 'test@example.com',
        ]);
        $user->assignRole($role3);
    }
}
