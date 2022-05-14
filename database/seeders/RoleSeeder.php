<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Creacion de Roles .
     *
     * @return void
     */
    public function run()
    {
        $admin = Role :: create(['name' => 'Admin']);
        $user = Role :: create(['name' => 'User']);

        Permission :: create(['name' => 'admin.index'])->syncRoles($admin, $user);

        Permission :: create(['name' => 'proveedores'])->syncRoles($admin, $user);
        Permission :: create(['name' => 'proveedores.add'])->assignRole($admin);
        Permission :: create(['name' => 'proveedores.edit'])->assignRole($admin);
        Permission :: create(['name' => 'proveedores.delete'])->assignRole($admin);

        Permission :: create(['name' => 'inventario'])->syncRoles($admin, $user);
        Permission :: create(['name' => 'inventario.add'])->assignRole($user);
        Permission :: create(['name' => 'inventario.edit'])->assignRole($user);
        Permission :: create(['name' => 'inventario.delete'])->assignRole($user);


        Permission :: create(['name' => 'admin.ajustes'])->syncRoles($admin, $user);
        Permission :: create(['name' => 'admin.ajustes.update']);
        Permission :: create(['name' => 'admin.ajustes.addUsers']);

        Permission :: create(['name' => 'admin.salir'])->syncRoles($admin, $user);


       

    }
}
