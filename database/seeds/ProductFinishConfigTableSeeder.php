<?php

use App\ProductFinishConfig;
use Illuminate\Database\Seeder;

class ProductFinishConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductFinishConfig::create([
            'AccentCode' => 0,
            'Config' => [
                'en' => 'no additional finish'
            ],
            'Option' => [
                'en' => 'Finish Configuration'
            ],
            'Desc' => [
                'en' => 'Single Finish'
            ]
        ]);

        ProductFinishConfig::create([
            'AccentCode' => 1,
            'Config' => [
                'en' => 'accent on drawer faces'
            ],
            'Option' => [
                'en' => 'Finish Configuration'
            ],
            'Desc' => [
                'en' => 'Pedestal Finish with drawer accents'
            ]
        ]);

        ProductFinishConfig::create([
            'AccentCode' => 2,
            'Config' => [
                'en' => 'accent on pedestal top'
            ],
            'Option' => [
                'en' => 'Finish Configuration'
            ],
            'Desc' => [
                'en' => 'Pedestal Finish with top accent'
            ]
        ]);

        ProductFinishConfig::create([
            'AccentCode' => 3,
            'Config' => [
                'en' => 'accent on top and drawer faces'
            ],
            'Option' => [
                'en' => 'Finish Configuration'
            ],
            'Desc' => [
                'en' => 'Pedestal Finish with top and drawer accents'
            ]
        ]);

        ProductFinishConfig::create([
            'AccentCode' => 4,
            'Config' => [
                'en' => 'Naked (No Finish)'
            ],
            'Option' => [
                'en' => 'Finish Configuration'
            ],
            'Desc' => [
                'en' => 'Naked (No Finish)'
            ]
        ]);

        ProductFinishConfig::create([
            'AccentCode' => 5,
            'Config' => [
                'en' => 'Naked (No Finish)'
            ],
            'Option' => [
                'en' => 'Finish Configuration'
            ],
            'Desc' => [
                'en' => 'Naked (No Finish)'
            ]
        ]);

        ProductFinishConfig::create([
            'AccentCode' => 6,
            'Config' => [
                'en' => 'no additional finish'
            ],
            'Option' => [
                'en' => 'Finish Configuration'
            ],
            'Desc' => [
                'en' => 'Single Finish'
            ]
        ]);

        ProductFinishConfig::create([
            'AccentCode' => 7,
            'Config' => [
                'en' => 'accent on drawer faces'
            ],
            'Option' => [
                'en' => 'Finish Configuration'
            ],
            'Desc' => [
                'en' => 'Desk Finish with drawer accents'
            ]
        ]);

        ProductFinishConfig::create([
            'AccentCode' => 8,
            'Config' => [
                'en' => 'accent on desktop surface'
            ],
            'Option' => [
                'en' => 'Finish Configuration'
            ],
            'Desc' => [
                'en' => 'Desk Finish with desktop accent'
            ]
        ]);

        ProductFinishConfig::create([
            'AccentCode' => 9,
            'Config' => [
                'en' => 'accent on desktop and drawer faces'
            ],
            'Option' => [
                'en' => 'Finish Configuration'
            ],
            'Desc' => [
                'en' => 'Desk Finish with desktop and drawer accents'
            ]
        ]);
        
    }
}
