<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrador = Role::create(['name' => 'Administrador']);
        $alumno = Role::create(['name' => 'Alumno']); 
        
        //lista de permisos
        Permission::create(['name' => 'Visualizar']);
        Permission::create(['name' => 'Editar']);
        Permission::create(['name' => 'Agregar']);
        Permission::create(['name' => 'Eliminar']);
        
        //Administrador        
        $administrador->givePermissionTo([
            'Visualizar',
            'Editar',
            'Agregar',
            'Eliminar', 
        ]);

        //Administrador        
        $alumno->givePermissionTo([
            'Visualizar',
            'Agregar',
        ]);
        
        //Asignando permisos
        $users = User::all();
        foreach ($users as $user){
            if($user->role_id!=null)
                $user->assignRole($user->role_id);
        }
    }
}
