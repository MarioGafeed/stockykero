<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {

        $this->call([
            ClientSeeder::class,
            CurrencySeeder::class,
            SettingSeeder::class,
            ServerSeeder::class,
            PermissionsSeeder::class,
            RoleSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
            UnitSeeder::class,
            UserRoleSeeder::class,
            PermissionRoleSeeder::class,
            Warehouse::class,
        ]);
        
    }
}
