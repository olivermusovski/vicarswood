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

        // Hardware
        ProductOption::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => 601,
        	'OptCode' => 'H',
        	'OptPosition' => 'B3',
        	'PositionName' => [
                'en' => 'Hardware Options',
                'es' => 'Opciones de Hardware'
            ],
        	'OptName' => [
                'en' => 'Decorative Knob, Black',
                'es' => 'Perilla decorativa'
            ],
        	'OptPrice' => -9.6,
        	'OptStdHours' => 0,
        	'OptStdLabor' => 0,
        	'OptStdMaterial' => 0,
        	'OptStdOverhead' => 0,
        	'UpdatedBy' => 1,
        	'Default' => 1,
            'PhotoFile' => 'Hardware_DecorativeKnog.png'
        ]);

        ProductOption::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => 601,
        	'OptCode' => 'H',
        	'OptPosition' => '03',
        	'PositionName' => [
                'en' => 'Hardware Options',
                'es' => 'Opciones de Hardware'
            ],
        	'OptName' => [
                'en' => '(No Hardware)',
                'es' => '(Sin manijas o perillas)'
            ],
        	'OptPrice' => -37.25,
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
        	'OptPosition' => 'A3',
        	'PositionName' => [
                'en' => 'Hardware Options',
                'es' => 'Opciones de Hardware'
            ],
        	'OptName' => [
                'en' => 'Decorative (Las Vegas) Pull, Black',
                'es' => 'Manija decorativa'
            ],
        	'OptPrice' => 0.00,
        	'OptStdHours' => 0,
        	'OptStdLabor' => 0,
        	'OptStdMaterial' => 0,
        	'OptStdOverhead' => 0,
        	'UpdatedBy' => 1,
        	'Default' => 0,
            'PhotoFile' => 'Hardware_DecorativePull.png'
        ]);

        //Finishes
        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 601,
            'OptCode' => '1',
            'OptPosition' => 'AAA',
            'PositionName' => [
                'en' => 'Finish Options',
                'es' => 'Opciones de Hardware'
            ],
            'OptName' => [
                'en' => 'Natural (Pine) Finish',
                'es' => 'Manija decorativa'
            ],
            'OptPrice' => -65.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0,
            'PhotoFile' => '601-1AAA.png'
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 601,
            'OptCode' => '1',
            'OptPosition' => 'CCC',
            'PositionName' => [
                'en' => 'Finish Options',
                'es' => 'Opciones de Hardware'
            ],
            'OptName' => [
                'en' => 'Antique Cherry',
                'es' => 'Manija decorativa'
            ],
            'OptPrice' => 0.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0,
            'PhotoFile' => '601-1CCC.png'
        ]);

        ProductOption::create([
            'LangCode' => 'EN',
            'BaseNBR' => 601,
            'OptCode' => '1',
            'OptPosition' => 'CAC',
            'PositionName' => [
                'en' => 'Finish Options',
                'es' => 'Opciones de Hardware'
            ],
            'OptName' => [
                'en' => 'Antique Cherry with Pine Drawer accent',
                'es' => 'Manija decorativa'
            ],
            'OptPrice' => 0.00,
            'OptStdHours' => 0,
            'OptStdLabor' => 0,
            'OptStdMaterial' => 0,
            'OptStdOverhead' => 0,
            'UpdatedBy' => 1,
            'Default' => 0,
            'PhotoFile' => '601-1CAC.png'
        ]);

        // 605
        
        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 605,
        //     'OptCode' => 'D',
        //     'OptPosition' => '1C',
        //     'PositionName' => [
        //         'en' => 'Drawer Options',
        //         'es' => 'Opciones de Drawer'
        //     ],
        //     'OptName' => [
        //         'en' => 'Three Drawers',
        //         'es' => 'Tres Drawers'
        //     ],
        //     'OptPrice' => 0.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 0
        // ]);

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 605,
        //     'OptCode' => 'D',
        //     'OptPosition' => '2C',
        //     'PositionName' => [
        //         'en' => 'Drawer Options',
        //         'es' => 'Opciones de Drawer'
        //     ],
        //     'OptName' => [
        //         'en' => 'Hanging File Folder Drawer',
        //         'es' => 'Hanging Drawero'
        //     ],
        //     'OptPrice' => 132.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 0
        // ]);

        
        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 605,
        //     'OptCode' => 'H',
        //     'OptPosition' => '1C',
        //     'PositionName' => [
        //         'en' => 'Hardware Options',
        //         'es' => 'Opciones de Hardware'
        //     ],
        //     'OptName' => [
        //         'en' => 'Decorative Knob, Black',
        //         'es' => 'Perilla decorativa'
        //     ],
        //     'OptPrice' => 0.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 1
        // ]);

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 605,
        //     'OptCode' => 'H',
        //     'OptPosition' => '0C',
        //     'PositionName' => [
        //         'en' => 'Hardware Options',
        //         'es' => 'Opciones de Hardware'
        //     ],
        //     'OptName' => [
        //         'en' => '(No Hardware)',
        //         'es' => '(Sin manijas o perillas)'
        //     ],
        //     'OptPrice' => -36.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 0
        // ]);

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 605,
        //     'OptCode' => 'H',
        //     'OptPosition' => '2C',
        //     'PositionName' => [
        //         'en' => 'Hardware Options',
        //         'es' => 'Opciones de Hardware'
        //     ],
        //     'OptName' => [
        //         'en' => 'Decorative (Las Vegas) Pull, Black',
        //         'es' => 'Manija decorativa'
        //     ],
        //     'OptPrice' => 25.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 0
        // ]);
        

        // // 609 English

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 609,
        //     'OptCode' => 'D',
        //     'OptPosition' => '2C',
        //     'PositionName' => 'Drawer Options',
        //     'OptName' => 'Hanging Filing Drawer',
        //     'OptPrice' => 132.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 0
        // ]);

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 609,
        //     'OptCode' => 'D',
        //     'OptPosition' => '1C',
        //     'PositionName' => 'Drawer Options',
        //     'OptName' => 'Three Drawers',
        //     'OptPrice' => 0.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 1
        // ]);

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 609,
        //     'OptCode' => 'H',
        //     'OptPosition' => '1C',
        //     'PositionName' => 'Hardware Options',
        //     'OptName' => 'Decorative Knob, Black',
        //     'OptPrice' => 24.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 0
        // ]);

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 609,
        //     'OptCode' => 'H',
        //     'OptPosition' => '2C',
        //     'PositionName' => 'Hardware Options',
        //     'OptName' => 'Decorative (Las Vegas) Pull, Black',
        //     'OptPrice' => 33.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 1
        // ]);

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 609,
        //     'OptCode' => 'H',
        //     'OptPosition' => '0C',
        //     'PositionName' => 'Hardware Options',
        //     'OptName' => '(No Hardware)',
        //     'OptPrice' => 0.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 0
        // ]);

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 609,
        //     'OptCode' => 'P',
        //     'OptPosition' => '3B',
        //     'PositionName' => 'Pull-Out Box Options',
        //     'OptName' => 'Clear (No Pull-Out Box)',
        //     'OptPrice' => 0.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 0
        // ]);

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 609,
        //     'OptCode' => 'P',
        //     'OptPosition' => '4B',
        //     'PositionName' => 'Pull-Out Box Options',
        //     'OptName' => 'Includes Pull-Out Storage Box',
        //     'OptPrice' => 28.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 0
        // ]);

        // // 705 English

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 705,
        //     'OptCode' => 'H',
        //     'OptPosition' => '1D',
        //     'PositionName' => [
        //         'en' => 'Hardware Options',
        //         'es' => 'Opciones de Hardware'
        //     ],
        //     'OptName' => [
        //         'en' => 'Decorative Knob',
        //         'es' => 'Perilla decorativa'
        //     ],
        //     'OptPrice' => 0.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 1
        // ]);

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 705,
        //     'OptCode' => 'H',
        //     'OptPosition' => '2D',
        //     'PositionName' => [
        //         'en' => 'Hardware Options',
        //         'es' => 'Opciones de Hardware'
        //     ],
        //     'OptName' => [
        //         'en' => 'Decorative Pull',
        //         'es' => 'Manija decorativa'
        //     ],
        //     'OptPrice' => 25.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 0
        // ]);

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 705,
        //     'OptCode' => 'H',
        //     'OptPosition' => '0D',
        //     'PositionName' => [
        //         'en' => 'Hardware Options',
        //         'es' => 'Opciones de Hardware'
        //     ],
        //     'OptName' => [
        //         'en' => '(No Hardware)',
        //         'es' => '(Sin manijas o perillas)'
        //     ],
        //     'OptPrice' => -36.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 0
        // ]);

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 705,
        //     'OptCode' => 'D',
        //     'OptPosition' => '3D',
        //     'PositionName' => 'Drawer Options',
        //     'OptName' => 'Combination Pedestals',
        //     'OptPrice' => 132.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 0
        // ]);

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 705,
        //     'OptCode' => 'D',
        //     'OptPosition' => '1D',
        //     'PositionName' => 'Drawer Options',
        //     'OptName' => 'Both Pedestals: 3-Drawer',
        //     'OptPrice' => 132.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 0
        // ]);

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 705,
        //     'OptCode' => 'D',
        //     'OptPosition' => '2D',
        //     'PositionName' => 'Drawer Options',
        //     'OptName' => 'Both Pedestals: Hanging File',
        //     'OptPrice' => 264.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 0
        // ]);


        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 705,
        //     'OptCode' => 'T',
        //     'OptPosition' => '5D',
        //     'PositionName' => 'Desktop Options',
        //     'OptName' => 'Cable Portal/Wood Mosaic Top',
        //     'OptPrice' => 35.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 0
        // ]);

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 705,
        //     'OptCode' => 'T',
        //     'OptPosition' => '6D',
        //     'PositionName' => 'Desktop Options',
        //     'OptName' => 'No Portal/Wood Mosaic Top',
        //     'OptPrice' => 0.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 0
        // ]);

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 705,
        //     'OptCode' => 'T',
        //     'OptPosition' => '7D',
        //     'PositionName' => 'Desktop Options',
        //     'OptName' => 'Cable Portal/Mosaic & Leather Top',
        //     'OptPrice' => 155.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 0
        // ]);

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 705,
        //     'OptCode' => 'T',
        //     'OptPosition' => '8D',
        //     'PositionName' => 'Desktop Options',
        //     'OptName' => 'No Portal/Mosaic & Leather Top',
        //     'OptPrice' => 120.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 1
        // ]);

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 705,
        //     'OptCode' => 'T',
        //     'OptPosition' => '3D',
        //     'PositionName' => 'Desktop Options',
        //     'OptName' => 'Cable Portal/Full Leather Top',
        //     'OptPrice' => 560.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 1
        // ]);

        // ProductOption::create([
        //     'LangCode' => 'EN',
        //     'BaseNBR' => 705,
        //     'OptCode' => 'T',
        //     'OptPosition' => '4D',
        //     'PositionName' => 'Desktop Options',
        //     'OptName' => 'No Portal/Full Leather Top',
        //     'OptPrice' => 595.00,
        //     'OptStdHours' => 0,
        //     'OptStdLabor' => 0,
        //     'OptStdMaterial' => 0,
        //     'OptStdOverhead' => 0,
        //     'UpdatedBy' => 1,
        //     'Default' => 1
        // ]);

        

        
    }
}
