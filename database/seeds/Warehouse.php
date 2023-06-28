<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Warehouse extends Seeder
{
    public function run()
    {
        // Insert some stuff
        DB::table('warehouses')->insert(
            array(
                'id'      => 1,
                'name'    => 'المخزن الرئيسي',
                'city'    => NULL,
                'mobile'  => NULL,
                'zip'     => NULL,
                'email'   => NULL,
                'country' => NULL,
            )
        );
    }
}
