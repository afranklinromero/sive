<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'user')->first();
        $role_admin = Role::where('name', 'admin')->first();
       

        $user = new User();
        $user->name = 'Carlos Mamani';
        $user->email = 'carlosmamani@gmail.com';
        $user->password = bcrypt('carlos');
       
        $user->save();
        $user->roles()->attach($role_user);
       
        $user = new User();
        $user->name = 'Jose Calderon';
        $user->email = 'josecarlderon@sive.com';
        $user->password = bcrypt('jose');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Jose Luis Alanoca';
        $user->email = 'josealanoca@sive.com';
        $user->password = bcrypt('jalanoca');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Bloquer';
        $user->email = 'bloquer@sive.com';
        $user->password = bcrypt('bloquer');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Erig Rojas';
        $user->email = 'erig@sive.com';
        $user->password = bcrypt('erig');
        $user->save();
        $user->roles()->attach($role_user);

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@example.com';
        $user->password = bcrypt('secret');
        $user->save();
        $user->roles()->attach($role_admin);//

        $user = new User();
        $user->name = 'Churisao';
        $user->email = 'churis@gmail.com';
        $user->password = bcrypt('churis');
       
        $user->save();
        $user->roles()->attach($role_admin);//
    }
}
