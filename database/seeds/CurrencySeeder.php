<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CurrencySeeder extends Seeder
{
    public function run()
    {
       	// Insert some stuff
        DB::table('currencies')->insert(
            array(
                'id'     => 1,
                'code'   => 'EGP',
                'name'   => 'Egyptian Pound',
                'symbol' => '£',
            )

        );
    }
}
