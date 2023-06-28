<?php


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    public function run()
    {
       	// Insert some stuff
        DB::table('clients')->insert(
            array(
                'id'     => 1,
                'name'   => 'عميل نقدي',
                'code' => 1,
                'email' => 'walk-in-customer@example.com',
                'country' => 'Egypt',
                'city' => 'Cairo',
                'phone' => '01273443918',
                'adresse' => 'غير معرف',
                'tax_number' => NULL,
            )

        );
    }
}
