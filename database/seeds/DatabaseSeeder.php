<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Role;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        Role::create([
            'name' => 'admin',
            'display_name' => 'Administrador',
            'description' => 'Administrador del Sistema'            
		]);
        
        Role::create([
            'name' => 'academia',
            'display_name' => 'Academia',
            'description' => 'Administración de Academia'            
		]);
        
        Role::create([
            'name' => 'usuario',
            'display_name' => 'Usuario',
            'description' => 'Usuario del Sistema'            
        ]);
        
        User::create([
            'name' => 'Administrador',
            'email' => 'administrador@ipn.mx',
            'password' => bcrypt('administrador')
        ])->attachRole(1);
        
        User::create([
            'name' => 'Computación',
            'email' => 'computacion@ipn.mx',
            'password' => bcrypt('computacion')
        ])->attachRole(2);

        User::create([
            'name' => 'Finanzas',
            'email' => 'finanzas@ipn.mx',
            'password' => bcrypt('finanzas')
        ])->attachRole(2);
        

        Model::reguard();
    }
}
