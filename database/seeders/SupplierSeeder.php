<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<100; $i++){
            DB::table('suppliers')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'address' => Str::random(10),
                'city' => Str::random(10),
                'country' => Str::random(10),
                'phone' => rand(999999999, 99999999999),
                'url' => 'www.'.Str::random(10).'.com',
            ]);
        }
        
    }
}
