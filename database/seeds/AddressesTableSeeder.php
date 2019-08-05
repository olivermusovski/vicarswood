<?php

use App\Address;
use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Address::create([
            'UserEmail' => 'customersupport@vicarswood.com',
            'AddressDisabled' => 0,
            'AddressType' => 'Company',
            'CompanyShortName' => 'Vicarswood',
            'CompanyLegalName' => 'Vicarswood',
            'CompanyWeb' => 'www.vicarswood.com',
            'Attention' => 'James Sargaent',
            'Street1' => 'LAS VEGAS, NV',
            'City' => 'Las Vegas',
            'Province' => 'NV',
            'PostalCode' => '',
            'Country' => 'United States of America',
            'PhoneNumber' => '+1 (919) 866-3882',
            'LeadTime' => 116,
            'QB_Type' => 'Wholesale'
        ]);

    }
}