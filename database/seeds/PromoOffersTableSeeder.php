<?php

use App\PromoOffer;
use Illuminate\Database\Seeder;

class PromoOffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PromoOffer::create([
            'promo_history_id' => 1,
        	'PromoCode' => 'HAPPY2019',
            'user_id' => 1,
            'OfferUsed' => '2000-01-01 12:00:00',
            'OfferConveyed' => 0,
            'FlaggedToEmail' => 1
        ]);

        PromoOffer::create([
            'promo_history_id' => 2,
            'PromoCode' => 'ABC123',
            'user_id' => 2,
            'OfferUsed' => '2000-01-01 12:00:00',
            'OfferConveyed' => 0,
            'FlaggedToEmail' => 1
        ]);

    }
}
