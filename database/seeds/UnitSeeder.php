<?php

use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    public function run()
    {
        DB::table('units')->insert(array(
            'id'       => 1,
            'name'     => "قطعة",
            'ShortName'=> 'ق'
        ));
    }
}
