<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
       // Insert some stuff
        DB::table('users')->insert(
            array(
                'id' => 1,
                'firstname' => 'Fady',
                'lastname' => 'Adel',
                'username' => 'Fady',
                'email' => 'fady@admin.com',
                'password' => '$2y$10$IFj6SwqC0Sxrsiv4YkCt.OJv1UV4mZrWuyLoRG7qt47mseP9mJ58u',
                'avatar' => 'no_avatar.png',
                'phone' => '0123456789',
                'role_id' => 1,
                'statut' => 1,
                'is_all_warehouses' => 1,
            )
        );
    }
}
