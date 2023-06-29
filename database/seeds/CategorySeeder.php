<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->insert(array(
            'id'       => 1,
            'name'     => "تصنيف أول",
            'code'     => 1
        ));
    }
}
