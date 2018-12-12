<?php

use App\ProductOption;
use Illuminate\Database\Seeder;

class ProductOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 601 Product 

        ProductOption::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => 601,
        	'OptCode' => 'F',
        	'OptPosition' => '1C',
        	'PositionName' => 'Finish Options',
        	'OptName' => 'Grey',
        	'OptPrice' => 75.00,
        	'OptStdHours' => 0,
        	'OptStdLabor' => 0,
        	'OptStdMaterial' => 0,
        	'OptStdOverhead' => 0,
        	'UpdatedBy' => 1,
        	'Default' => 0
        ]);

        ProductOption::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => '601',
        	'OptCode' => 'F',
        	'OptPosition' => 'D2',
        	'PositionName' => 'Finish Options',
        	'OptName' => 'Cherry',
        	'OptPrice' => '75.00',
        	'OptStdHours' => '0',
        	'OptStdLabor' => '0',
        	'OptStdMaterial' => '0',
        	'OptStdOverhead' => '0',
        	'UpdatedBy' => '1',
        	'Default' => '0'
        ]);

        ProductOption::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => '601',
        	'OptCode' => 'F',
        	'OptPosition' => 'D3',
        	'PositionName' => 'Finish Options',
        	'OptName' => 'Turquiose',
        	'OptPrice' => '75.00',
        	'OptStdHours' => '0',
        	'OptStdLabor' => '0',
        	'OptStdMaterial' => '0',
        	'OptStdOverhead' => '0',
        	'UpdatedBy' => '1',
        	'Default' => '0'
        ]);

        ProductOption::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => '601',
        	'OptCode' => 'F',
        	'OptPosition' => '4C',
        	'PositionName' => 'Finish Options',
        	'OptName' => 'Red',
        	'OptPrice' => '75.00',
        	'OptStdHours' => '0',
        	'OptStdLabor' => '0',
        	'OptStdMaterial' => '0',
        	'OptStdOverhead' => '0',
        	'UpdatedBy' => '1',
        	'Default' => '0'
        ]);

        ProductOption::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => '601',
        	'OptCode' => 'F',
        	'OptPosition' => '0C',
        	'PositionName' => 'Finish Options',
        	'OptName' => 'Unfinished',
        	'OptPrice' => '-60.00',
        	'OptStdHours' => '0',
        	'OptStdLabor' => '0',
        	'OptStdMaterial' => '0',
        	'OptStdOverhead' => '0',
        	'UpdatedBy' => '1',
        	'Default' => '0'
        ]);

        ProductOption::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => '601',
        	'OptCode' => 'F',
        	'OptPosition' => '6C',
        	'PositionName' => 'Finish Options',
        	'OptName' => 'Danish Oil (Natural)',
        	'OptPrice' => '0.00',
        	'OptStdHours' => '0',
        	'OptStdLabor' => '0',
        	'OptStdMaterial' => '0',
        	'OptStdOverhead' => '0',
        	'UpdatedBy' => '1',
        	'Default' => '1'
        ]);

        ProductOption::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => '601',
        	'OptCode' => 'H',
        	'OptPosition' => '3C',
        	'PositionName' => 'Hardware Options',
        	'OptName' => 'Decorative Knob',
        	'OptPrice' => '0.00',
        	'OptStdHours' => '0',
        	'OptStdLabor' => '0',
        	'OptStdMaterial' => '0',
        	'OptStdOverhead' => '0',
        	'UpdatedBy' => '1',
        	'Default' => '1'
        ]);

        ProductOption::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => '601',
        	'OptCode' => 'H',
        	'OptPosition' => '1C',
        	'PositionName' => 'Hardware Options',
        	'OptName' => '(No Hardware)',
        	'OptPrice' => '-36.00',
        	'OptStdHours' => '0',
        	'OptStdLabor' => '0',
        	'OptStdMaterial' => '0',
        	'OptStdOverhead' => '0',
        	'UpdatedBy' => '1',
        	'Default' => '0'
        ]);

        ProductOption::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => '601',
        	'OptCode' => 'H',
        	'OptPosition' => '2C',
        	'PositionName' => 'Hardware Options',
        	'OptName' => 'Decorative Pull',
        	'OptPrice' => '25.00',
        	'OptStdHours' => '0',
        	'OptStdLabor' => '0',
        	'OptStdMaterial' => '0',
        	'OptStdOverhead' => '0',
        	'UpdatedBy' => '1',
        	'Default' => '0'
        ]);

        // 609 Product

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => '609',
            'OptCode' => '3',
            'OptPosition' => 'P2',
            'PositionName' => 'Drawer Options',
            'OptName' => 'Hanging Filing Drawer',
            'OptPrice' => '132.00',
            'OptStdHours' => '0',
            'OptStdLabor' => '0',
            'OptStdMaterial' => '0',
            'OptStdOverhead' => '0',
            'UpdatedBy' => '1',
            'Default' => '0'
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => '609',
            'OptCode' => '3',
            'OptPosition' => 'P3',
            'PositionName' => 'Drawer Options',
            'OptName' => 'Three Drawers',
            'OptPrice' => '0.00',
            'OptStdHours' => '0',
            'OptStdLabor' => '0',
            'OptStdMaterial' => '0',
            'OptStdOverhead' => '0',
            'UpdatedBy' => '1',
            'Default' => '1'
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => '609',
            'OptCode' => 'F',
            'OptPosition' => '6C',
            'PositionName' => 'Finish Options',
            'OptName' => 'Danish Oil (Natural)',
            'OptPrice' => '0.00',
            'OptStdHours' => '0',
            'OptStdLabor' => '0',
            'OptStdMaterial' => '0',
            'OptStdOverhead' => '0',
            'UpdatedBy' => '1',
            'Default' => '0'
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => '609',
            'OptCode' => 'F',
            'OptPosition' => '0C',
            'PositionName' => 'Finish Options',
            'OptName' => 'Unfinished',
            'OptPrice' => '-35.00',
            'OptStdHours' => '0',
            'OptStdLabor' => '0',
            'OptStdMaterial' => '0',
            'OptStdOverhead' => '0',
            'UpdatedBy' => '1',
            'Default' => '0'
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => '609',
            'OptCode' => 'F',
            'OptPosition' => '4C',
            'PositionName' => 'Finish Options',
            'OptName' => 'Red',
            'OptPrice' => '83.00',
            'OptStdHours' => '0',
            'OptStdLabor' => '0',
            'OptStdMaterial' => '0',
            'OptStdOverhead' => '0',
            'UpdatedBy' => '1',
            'Default' => '1'
        ]);
    }
}
