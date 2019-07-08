<?php

use App\ProductDetail;
use Illuminate\Database\Seeder;

class ProductDetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 601 Product

        ProductDetail::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => 601,
        	'ObjectSequence' => 1,
        	'ObjectName' => 'Front View',
        	'ObjectFile' => '601-ShtImage1.png',
        	'UpdatedBy' => 1,
        ]);

        ProductDetail::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => 601,
        	'ObjectSequence' => 2,
        	'ObjectName' => 'Side View',
        	'ObjectFile' => '601-ShtImage2.png',
        	'UpdatedBy' => 1,
        ]);

        ProductDetail::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => 601,
        	'ObjectSequence' => 3,
        	'ObjectName' => 'Top View',
        	'ObjectFile' => '601-ShtImage3.png',
        	'UpdatedBy' => 1,
        ]);

        ProductDetail::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => 601,
        	'ObjectSequence' => 4,
        	'ObjectName' => 'Other Side View',
        	'ObjectFile' => '601-ShtImage4.png',
        	'UpdatedBy' => 1,
        ]);

        ProductDetail::create([
            'LangCode' => 'EN',
            'BaseNBR' => 601,
            'ObjectSequence' => 5,
            'ObjectName' => 'Promo Image',
            'ObjectFile' => '601-ShtImage5.png',
            'UpdatedBy' => 1,
        ]);
        

        // 605 Product
        
        ProductDetail::create([
            'LangCode' => 'EN',
            'BaseNBR' => 605,
            'ObjectSequence' => 1,
            'ObjectName' => 'Promo Image',
            'ObjectFile' => '605-ShtImage1.png',
            'UpdatedBy' => 1,
        ]);

        ProductDetail::create([
            'LangCode' => 'EN',
            'BaseNBR' => 605,
            'ObjectSequence' => 2,
            'ObjectName' => 'Detail',
            'ObjectFile' => '605-ShtImage2.png',
            'UpdatedBy' => 1,
        ]); 
        
        ProductDetail::create([
            'LangCode' => 'EN',
            'BaseNBR' => 605,
            'ObjectSequence' => 3,
            'ObjectName' => 'Top View',
            'ObjectFile' => '605-ShtImage3.png',
            'UpdatedBy' => 1,
        ]);

        ProductDetail::create([
            'LangCode' => 'EN',
            'BaseNBR' => 605,
            'ObjectSequence' => 4,
            'ObjectName' => 'Side View',
            'ObjectFile' => '605-ShtImage4.png',
            'UpdatedBy' => 1,
        ]); 

        // 609 Product

        ProductDetail::create([
            'LangCode' => 'EN',
            'BaseNBR' => 609,
            'ObjectSequence' => 1,
            'ObjectName' => 'Promo Image',
            'ObjectFile' => '609-ShtImage1.png',
            'UpdatedBy' => 1,
        ]);

        ProductDetail::create([
            'LangCode' => 'EN',
            'BaseNBR' => 609,
            'ObjectSequence' => 2,
            'ObjectName' => 'Top View',
            'ObjectFile' => '609-ShtImage2.png',
            'UpdatedBy' => 1,
        ]);

        ProductDetail::create([
            'LangCode' => 'EN',
            'BaseNBR' => 609,
            'ObjectSequence' => 3,
            'ObjectName' => 'Other View',
            'ObjectFile' => '609-ShtImage3.png',
            'UpdatedBy' => 1,
        ]);

        ProductDetail::create([
            'LangCode' => 'EN',
            'BaseNBR' => 609,
            'ObjectSequence' => 4,
            'ObjectName' => 'Box View',
            'ObjectFile' => '609-ShtImage4.png',
            'UpdatedBy' => 1,
        ]);

        // 705 Product

        ProductDetail::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'ObjectSequence' => 1,
            'ObjectName' => 'Promo Image',
            'ObjectFile' => '705-ShtImage1.png',
            'UpdatedBy' => 1,
        ]);

        ProductDetail::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'ObjectSequence' => 2,
            'ObjectName' => 'Top View',
            'ObjectFile' => '705-ShtImage2.png',
            'UpdatedBy' => 1,
        ]);

        ProductDetail::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'ObjectSequence' => 3,
            'ObjectName' => 'Other View',
            'ObjectFile' => '705-ShtImage3.png',
            'UpdatedBy' => 1,
        ]);

        ProductDetail::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'ObjectSequence' => 4,
            'ObjectName' => 'Back View',
            'ObjectFile' => '705-ShtImage4.png',
            'UpdatedBy' => 1,
        ]);

        ProductDetail::create([
            'LangCode' => 'EN',
            'BaseNBR' => 705,
            'ObjectSequence' => 5,
            'ObjectName' => 'Detail View',
            'ObjectFile' => '705-ShtImage9.png',
            'UpdatedBy' => 1,
        ]);
    }
}
