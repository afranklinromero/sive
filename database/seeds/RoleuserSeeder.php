<?php

use App\Roleuser;
use Illuminate\Database\Seeder;

class RoleuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $roleuser = new Roleuser();
        $roleuser->role_id = 1;
        $roleuser->user_id = 1;
        $roleuser->save();

        $roleuser = new Roleuser();
        $roleuser->role_id = 2;
        $roleuser->user_id = 2;
        $roleuser->save();

        $roleuser = new Roleuser();
        $roleuser->role_id = 2;
        $roleuser->user_id = 3;
        $roleuser->save();

        $roleuser = new Roleuser();
        $roleuser->role_id = 2;
        $roleuser->user_id = 4;
        $roleuser->save();

        $roleuser = new Roleuser();
        $roleuser->role_id = 2;
        $roleuser->user_id = 5;
        $roleuser->save();

        $roleuser = new Roleuser();
        $roleuser->role_id = 2;
        $roleuser->user_id = 6;
        $roleuser->save();
        

        $roleuser = new Roleuser();
        $roleuser->role_id = 2;
        $roleuser->user_id = 7;
        $roleuser->save();
    }
}
