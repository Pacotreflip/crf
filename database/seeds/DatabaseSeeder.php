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
        ]);
        
        User::create([
            'name' => 'Invitado',
            'email' => 'invitado@crf.com.mx',
            'password' => bcrypt('invitado*16')
        ]);
        
        User::create([
            'name' => 'Computación',
            'email' => 'computacion@ipn.mx',
            'password' => bcrypt('computacion')
        ]);
                
        User::create([
            'name' => 'Investigación de Operaciones',
            'email' => 'investigaciondeoperaciones@ipn.mx',
            'password' => bcrypt('investigaciondeoperaciones')
        ]);

        User::create([
            'name' => 'Finanzas',
            'email' => 'finanzas@ipn.mx',
            'password' => bcrypt('finanzas')
        ]);

        User::create([
            'name' => 'José Francisco Esquivel',
            'email' => 'francisco@ipn.mx',
            'password' => bcrypt('francisco')
        ]);

        Model::reguard();
    }
}
