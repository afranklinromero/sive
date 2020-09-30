<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $this->truncateTables([
                'users',
                'roles',
                'role_user',
                'clientes',
                'userclientes',
                'productos',
                'precioproductos',
            ]);
            $this->call(UserTableSeeder::class);
            $this->call(RoleTableSeeder::class);
            $this->call(RoleuserSeeder::class);
            $this->call(ClienteSeeder::class);
            $this->call(UserclienteSeeder::class);
            $this->call(ProductoSeeder::class);
            $this->call(PrecioproductoSeeder::class);
        }
    
        protected function truncateTables(array $tables){
            DB::Statement('SET FOREIGN_KEY_CHECKS = 0;');
            foreach($tables as $table){
                DB::table($table)->truncate();
            }
            DB::Statement('SET FOREIGN_KEY_CHECKS = 1;');
        }
}
