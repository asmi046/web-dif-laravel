<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class AddIconNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('uslugi')
        ->where('id', 1)
        ->update(['img_name' => 'site-visitka.svg']);
        
        DB::table('uslugi')
        ->where('id', 2)
        ->update(['img_name' => 'site-lending.svg']);
        
        DB::table('uslugi')
        ->where('id', 3)
        ->update(['img_name' => 'site-korporativ.svg']);
        
        DB::table('uslugi')
        ->where('id', 4)
        ->update(['img_name' => 'site-catalog.svg']);
        
        DB::table('uslugi')
        ->where('id', 5)
        ->update(['img_name' => 'site-shop.svg']);
    }
}
