<?php

use App\Coupon;
use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create([
        	'code' => 'ABC123',
        	'type' => 'fixed',
        	'value' => 30,
            'end_date' => '2020-01-01'
        ]);

        Coupon::create([
        	'code' => 'DEF456',
        	'type' => 'percent',
        	'percent_off' => 50,
            'end_date' => '2020-01-01'
        ]);

        Coupon::create([
            'code' => 'ABC2017',
            'type' => 'fixed',
            'value' => 50,
            'end_date' => '2017-01-01'
        ]);
    }
}
