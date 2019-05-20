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
        // 601 English 

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
        	'BaseNBR' => 601,
        	'OptCode' => 'F',
        	'OptPosition' => 'D2',
        	'PositionName' => 'Finish Options',
        	'OptName' => 'Cherry',
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
        	'BaseNBR' => 601,
        	'OptCode' => 'F',
        	'OptPosition' => 'D3',
        	'PositionName' => 'Finish Options',
        	'OptName' => 'Turquiose',
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
        	'BaseNBR' => 601,
        	'OptCode' => 'F',
        	'OptPosition' => '4C',
        	'PositionName' => 'Finish Options',
        	'OptName' => 'Red',
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
        	'BaseNBR' => 601,
        	'OptCode' => 'F',
        	'OptPosition' => '0C',
        	'PositionName' => 'Finish Options',
        	'OptName' => 'Unfinished',
        	'OptPrice' => -60.00,
        	'OptStdHours' => 0,
        	'OptStdLabor' => 0,
        	'OptStdMaterial' => 0,
        	'OptStdOverhead' => 0,
        	'UpdatedBy' => 1,
        	'Default' => 0
        ]);

        ProductOption::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => 601,
        	'OptCode' => 'F',
        	'OptPosition' => '6C',
        	'PositionName' => 'Finish Options',
        	'OptName' => 'Danish Oil (Natural)',
        	'OptPrice' => 0.00,
        	'OptStdHours' => 0,
        	'OptStdLabor' => 0,
        	'OptStdMaterial' => 0,
        	'OptStdOverhead' => 0,
        	'UpdatedBy' => 1,
        	'Default' => 1
        ]);

        ProductOption::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => 601,
        	'OptCode' => 'H',
        	'OptPosition' => '3C',
        	'PositionName' => 'Hardware Options',
        	'OptName' => 'Decorative Knob',
        	'OptPrice' => 0.00,
        	'OptStdHours' => 0,
        	'OptStdLabor' => 0,
        	'OptStdMaterial' => 0,
        	'OptStdOverhead' => 0,
        	'UpdatedBy' => 1,
        	'Default' => 1
        ]);

        ProductOption::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => 601,
        	'OptCode' => 'H',
        	'OptPosition' => '1C',
        	'PositionName' => 'Hardware Options',
        	'OptName' => '(No Hardware)',
        	'OptPrice' => -36.00,
        	'OptStdHours' => 0,
        	'OptStdLabor' => 0,
        	'OptStdMaterial' => 0,
        	'OptStdOverhead' => 0,
        	'UpdatedBy' => 1,
        	'Default' => 0
        ]);

        ProductOption::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => 601,
        	'OptCode' => 'H',
        	'OptPosition' => '2C',
        	'PositionName' => 'Hardware Options',
        	'OptName' => 'Decorative Pull',
        	'OptPrice' => 25.00,
        	'OptStdHours' => 0,
        	'OptStdLabor' => 0,
        	'OptStdMaterial' => 0,
        	'OptStdOverhead' => 0,
        	'UpdatedBy' => 1,
        	'Default' => 0
        ]);

        // 601 Spanish
        
        ProductOption::create([
            'LangCode' => 'ES',
            'BaseNBR' => 601,
            'OptCode' => 'F',
            'OptPosition' => '6',
            'PositionName' => 'Acabados Disponibles',
            'OptName' => 'Aceite danés, luz',
            'OptPrice' => 0.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 1
        ]);

        ProductOption::create([
            'LangCode' => 'ES',
            'BaseNBR' => 601,
            'OptCode' => 'F',
            'OptPosition' => '5',
            'PositionName' => 'Acabados Disponibles',
            'OptName' => '(Sin acabado)',
            'OptPrice' => -60.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'ES',
            'BaseNBR' => 601,
            'OptCode' => 'F',
            'OptPosition' => '4',
            'PositionName' => 'Acabados Disponibles',
            'OptName' => 'Red',
            'OptPrice' => 75.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'ES',
            'BaseNBR' => 601,
            'OptCode' => 'F',
            'OptPosition' => '3',
            'PositionName' => 'Acabados Disponibles',
            'OptName' => 'Turquiose',
            'OptPrice' => 75.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'ES',
            'BaseNBR' => 601,
            'OptCode' => 'F',
            'OptPosition' => '2',
            'PositionName' => 'Acabados Disponibles',
            'OptName' => 'Cherry',
            'OptPrice' => 75.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'ES',
            'BaseNBR' => 601,
            'OptCode' => 'F',
            'OptPosition' => '1',
            'PositionName' => 'Acabados Disponibles',
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
            'LangCode' => 'ES',
            'BaseNBR' => 601,
            'OptCode' => 'H',
            'OptPosition' => '2C',
            'PositionName' => 'Opciones de Hardware',
            'OptName' => 'Manija decorativa',
            'OptPrice' => 25.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'ES',
            'BaseNBR' => 601,
            'OptCode' => 'H',
            'OptPosition' => '3C',
            'PositionName' => 'Opciones de Hardware',
            'OptName' => 'Perilla decorativa',
            'OptPrice' => 0.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 1
        ]);

        ProductOption::create([
            'LangCode' => 'ES',
            'BaseNBR' => 601,
            'OptCode' => 'H',
            'OptPosition' => '1C',
            'PositionName' => 'Opciones de Hardware',
            'OptName' => '(Sin manijas o perillas)',
            'OptPrice' => -36.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        // 609 English

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 609,
            'OptCode' => '3',
            'OptPosition' => 'P2',
            'PositionName' => 'Drawer Options',
            'OptName' => 'Hanging Filing Drawer',
            'OptPrice' => 132.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 609,
            'OptCode' => '3',
            'OptPosition' => 'P3',
            'PositionName' => 'Drawer Options',
            'OptName' => 'Three Drawers',
            'OptPrice' => 0.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 1
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 609,
            'OptCode' => 'F',
            'OptPosition' => '6C',
            'PositionName' => 'Finish Options',
            'OptName' => 'Danish Oil (Natural)',
            'OptPrice' => 0.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 609,
            'OptCode' => 'F',
            'OptPosition' => '0C',
            'PositionName' => 'Finish Options',
            'OptName' => 'Unfinished',
            'OptPrice' => -35.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 609,
            'OptCode' => 'F',
            'OptPosition' => '5C',
            'PositionName' => 'Finish Options',
            'OptName' => 'Green',
            'OptPrice' => 83.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 609,
            'OptCode' => 'F',
            'OptPosition' => '4C',
            'PositionName' => 'Finish Options',
            'OptName' => 'Red',
            'OptPrice' => 83.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 609,
            'OptCode' => 'F',
            'OptPosition' => '3C',
            'PositionName' => 'Finish Options',
            'OptName' => 'Turquiose',
            'OptPrice' => 83.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 609,
            'OptCode' => 'F',
            'OptPosition' => '2C',
            'PositionName' => 'Finish Options',
            'OptName' => 'Cherry',
            'OptPrice' => 83.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 1
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 609,
            'OptCode' => 'F',
            'OptPosition' => '1C',
            'PositionName' => 'Finish Options',
            'OptName' => 'Grey',
            'OptPrice' => 83.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 609,
            'OptCode' => 'H',
            'OptPosition' => '1C',
            'PositionName' => 'Hardware Options',
            'OptName' => 'Decorative Knob',
            'OptPrice' => 24.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 609,
            'OptCode' => 'H',
            'OptPosition' => '2C',
            'PositionName' => 'Hardware Options',
            'OptName' => 'Decorative Pull',
            'OptPrice' => 33.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 1
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 609,
            'OptCode' => 'H',
            'OptPosition' => '0C',
            'PositionName' => 'Hardware Options',
            'OptName' => '(No Hardware)',
            'OptPrice' => 0.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        // 705 English
        
        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'OptCode' => 'F',
            'OptPosition' => '6D',
            'PositionName' => 'Finish Options',
            'OptName' => 'Danish Oil (Natural)',
            'OptPrice' => 0.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 1
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'OptCode' => 'F',
            'OptPosition' => '0D',
            'PositionName' => 'Finish Options',
            'OptName' => 'Unfinished',
            'OptPrice' => -123.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'OptCode' => 'F',
            'OptPosition' => '4D',
            'PositionName' => 'Finish Options',
            'OptName' => 'Red',
            'OptPrice' => 326.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'OptCode' => 'F',
            'OptPosition' => '3C',
            'PositionName' => 'Finish Options',
            'OptName' => 'Turquiose',
            'OptPrice' => 326.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'OptCode' => 'F',
            'OptPosition' => '2D',
            'PositionName' => 'Finish Options',
            'OptName' => 'Cherry',
            'OptPrice' => 326.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'OptCode' => 'F',
            'OptPosition' => '1D',
            'PositionName' => 'Finish Options',
            'OptName' => 'Grey',
            'OptPrice' => 326.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'OptCode' => 'H',
            'OptPosition' => '3D',
            'PositionName' => 'Hardware Options',
            'OptName' => 'Decorative Knob',
            'OptPrice' => 0.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 1
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'OptCode' => 'H',
            'OptPosition' => '2D',
            'PositionName' => 'Hardware Options',
            'OptName' => 'Decorative Pull',
            'OptPrice' => 25.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'OptCode' => 'H',
            'OptPosition' => '0D',
            'PositionName' => 'Hardware Options',
            'OptName' => '(No Hardware)',
            'OptPrice' => -36.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'OptCode' => '3',
            'OptPosition' => '1D',
            'PositionName' => 'Desk Top Options',
            'OptName' => 'Leather Inlay, Full',
            'OptPrice' => 397.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'OptCode' => '3',
            'OptPosition' => '2D',
            'PositionName' => 'Desk Top Options',
            'OptName' => 'Leather Inlay, Writing',
            'OptPrice' => 98.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'OptCode' => '3',
            'OptPosition' => '3D',
            'PositionName' => 'Desk Top Options',
            'OptName' => 'Wood Pattern',
            'OptPrice' => 35.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'OptCode' => '3',
            'OptPosition' => '4D',
            'PositionName' => 'Desk Top Options',
            'OptName' => 'Wood Framed',
            'OptPrice' => 0.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 1
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'OptCode' => '4',
            'OptPosition' => '1D',
            'PositionName' => 'Configurations',
            'OptName' => 'Without Wire Management',
            'OptPrice' => 0.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 1
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'OptCode' => '4',
            'OptPosition' => '2D',
            'PositionName' => 'Configurations',
            'OptName' => 'With Cable Hatches, Powerstrip not included',
            'OptPrice' => 0.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        // 705 Spanish
            
        ProductOption::create([
            'LangCode' => 'ES',
            'BaseNBR' => 705,
            'OptCode' => 'F',
            'OptPosition' => '1',
            'PositionName' => 'Acabados Disponibles',
            'OptName' => 'Grey',
            'OptPrice' => 326.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'ES',
            'BaseNBR' => 705,
            'OptCode' => 'F',
            'OptPosition' => '2',
            'PositionName' => 'Acabados Disponibles',
            'OptName' => 'Cherry',
            'OptPrice' => 326.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'ES',
            'BaseNBR' => 705,
            'OptCode' => 'F',
            'OptPosition' => '3',
            'PositionName' => 'Acabados Disponibles',
            'OptName' => 'Turquiose',
            'OptPrice' => 326.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'ES',
            'BaseNBR' => 705,
            'OptCode' => 'F',
            'OptPosition' => '4',
            'PositionName' => 'Acabados Disponibles',
            'OptName' => 'Red',
            'OptPrice' => 326.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'ES',
            'BaseNBR' => 705,
            'OptCode' => 'F',
            'OptPosition' => '5',
            'PositionName' => 'Acabados Disponibles',
            'OptName' => '(Sin acabado)',
            'OptPrice' => -60.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'ES',
            'BaseNBR' => 705,
            'OptCode' => 'F',
            'OptPosition' => '6',
            'PositionName' => 'Acabados Disponibles',
            'OptName' => 'Aceite danés, luz',
            'OptPrice' => 0.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 1
        ]);

        ProductOption::create([
            'LangCode' => 'ES',
            'BaseNBR' => 705,
            'OptCode' => 'H',
            'OptPosition' => '3D',
            'PositionName' => 'Opciones de Hardware',
            'OptName' => 'Perilla decorativa',
            'OptPrice' => 0.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 1
        ]);

        ProductOption::create([
            'LangCode' => 'ES',
            'BaseNBR' => 705,
            'OptCode' => 'H',
            'OptPosition' => '0D',
            'PositionName' => 'Opciones de Hardware',
            'OptName' => '(Sin manijas o perillas)',
            'OptPrice' => -36.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);

        ProductOption::create([
            'LangCode' => 'ES',
            'BaseNBR' => 705,
            'OptCode' => 'H',
            'OptPosition' => '2D',
            'PositionName' => 'Opciones de Hardware',
            'OptName' => 'Manija decorativa',
            'OptPrice' => 25.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0
        ]);
    }
}
