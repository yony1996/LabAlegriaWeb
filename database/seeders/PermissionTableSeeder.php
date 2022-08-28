<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Bioquimico']);
        $role3 = Role::create(['name' => 'Paciente']);
        $user_password = Hash::make('12345679@');
        
        
        $admin = User::create([
            'nui'=>'0783456789',
            'age'=>'26',
            'name' => 'MACELA',
            'last_name' => 'PALATE',
            'phone'=>'0123456789',
            'gender'=>'F',
            'email' => 'laboratorioalegria1@gmail.com',
            'email_verified_at' => now(),
            'status'=>1,
            'password' => $user_password, // password
            
        ]);
        $bioq = User::create([
            'nui'=>'0223456789',
            'age'=>'26',
            'name' => 'Bioquimico',
            'last_name' => 'bioquimico',
            'phone'=>'0123456789',
            'gender'=>'M-F',
            'email' => 'bioquimico@gmail.com',
            'email_verified_at' => now(),
            'status'=>1,
            'password' => $user_password, // password
            
        ]);
        // $paciente = User::create([
        //     'nui'=>'0125478968',
        //     'age'=>'26',
        //     'name' => 'Paciente',
        //     'last_name' => 'paciente',
        //     'phone'=>'0123456789',
        //     'gender'=>'M-F',
        //     'email' => 'paciente@gmail.com',
        //     'email_verified_at' => now(),
        //     'status'=>1,
        //     'password' => $user_password, // password
            
        // ]);

        $admin->assignRole($role1);
        $bioq->assignRole($role2);
        //$paciente->assignRole($role3);
    }
}
