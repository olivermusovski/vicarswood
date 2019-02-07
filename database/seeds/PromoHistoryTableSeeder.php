<?php

use App\PromoHistory;
use Illuminate\Database\Seeder;

class PromoHistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PromoHistory::create([
        	'PromoCode' => 'HAPPY2019',
            'LangCode' => 'EN',
            'PromoName' => 'Last Order Appreciated',
            'DateStarted' => '2019-01-01',
            'DateClosed' => '2019-12-31',
            'Internal' => 0,
            'Discount' => 0.05,
            'Launch' => 1,
            'LaunchEmail' => 'Test email message',
            'FromName' => 'James',
            'FromEmail' => 'customersupport@vicarswood.com',
            'FromPhone' => '555-555-5555'
        ]);

        PromoHistory::create([
            'PromoCode' => 'ABC123',
            'LangCode' => 'EN',
            'PromoName' => 'Last Order Appreciated',
            'DateStarted' => '2019-01-01',
            'DateClosed' => '2019-12-31',
            'Internal' => 0,
            'Discount' => 0.10,
            'Launch' => 1,
            'LaunchEmail' => 'Test email message',
            'FromName' => 'James',
            'FromEmail' => 'customersupport@vicarswood.com',
            'FromPhone' => '555-555-5555'
        ]);

        PromoHistory::create([
            'PromoCode' => 'NOTLAUNCHED',
            'LangCode' => 'EN',
            'PromoName' => 'Last Order Appreciated',
            'DateStarted' => '2019-01-01',
            'DateClosed' => '2019-12-31',
            'Internal' => 0,
            'Discount' => 0.10,
            'Launch' => 0,
            'LaunchEmail' => 'Test email message',
            'FromName' => 'James',
            'FromEmail' => 'customersupport@vicarswood.com',
            'FromPhone' => '555-555-5555'
        ]);

        PromoHistory::create([
            'PromoCode' => 'NOTSTARTED',
            'LangCode' => 'EN',
            'PromoName' => 'Last Order Appreciated',
            'DateStarted' => '2019-06-01',
            'DateClosed' => '2019-12-31',
            'Internal' => 0,
            'Discount' => 0.20,
            'Launch' => 1,
            'LaunchEmail' => 'Test email message',
            'FromName' => 'James',
            'FromEmail' => 'customersupport@vicarswood.com',
            'FromPhone' => '555-555-5555'
        ]);

    }
}
