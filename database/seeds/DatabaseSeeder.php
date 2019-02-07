<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call([
        	UsersTableSeeder::class,
        	CouponsTableSeeder::class,
        	ProductsTableSeeder::class,
        	ProductOptionsTableSeeder::class,
        	ProductDetailsTableSeeder::class,
            PromoHistoryTableSeeder::class,
            PromoOffersTableSeeder::class
        ]);
    }
}
