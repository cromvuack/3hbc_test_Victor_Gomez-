<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole      = Role::create(['name' => 'admin']);
        $operationsRole = Role::create(['name' => 'operations']);

        Permission::create(['name' => 'airline.index'])->syncRoles([$adminRole, $operationsRole]);
        Permission::create(['name' => 'airline.store'])->syncRoles([$adminRole, $operationsRole]);
        Permission::create(['name' => 'airline.update'])->syncRoles([$adminRole, $operationsRole]);
        Permission::create(['name' => 'airline.destroy'])->syncRoles([$adminRole, $operationsRole]);

        Permission::create(['name' => 'airport.index'])->syncRoles([$adminRole, $operationsRole]);
        Permission::create(['name' => 'airport.store'])->syncRoles([$adminRole, $operationsRole]);
        Permission::create(['name' => 'airport.update'])->syncRoles([$adminRole, $operationsRole]);
        Permission::create(['name' => 'airport.destroy'])->syncRoles([$adminRole, $operationsRole]);

        Permission::create(['name' => 'flight.index'])->assignRole($adminRole);
        Permission::create(['name' => 'flight.store'])->assignRole($adminRole);
        Permission::create(['name' => 'flight.update'])->assignRole($adminRole);
        Permission::create(['name' => 'flight.destroy'])->assignRole($adminRole);



    }
}
