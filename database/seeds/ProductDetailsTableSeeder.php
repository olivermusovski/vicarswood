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
        	'BaseNBR' => '601',
        	'ObjectSequence' => '1',
        	'ObjectName' => 'Front View',
        	'ObjectFile' => '601-ShtImage1.png',
        	'UpdatedBy' => '1',
        ]);

        ProductDetail::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => '601',
        	'ObjectSequence' => '2',
        	'ObjectName' => 'Side View',
        	'ObjectFile' => '601-ShtImage2.png',
        	'UpdatedBy' => '1',
        ]);

        ProductDetail::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => '601',
        	'ObjectSequence' => '3',
        	'ObjectName' => 'Top View',
        	'ObjectFile' => '601-ShtImage3.png',
        	'UpdatedBy' => '1',
        ]);

        ProductDetail::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => '601',
        	'ObjectSequence' => '4',
        	'ObjectName' => 'Other View',
        	'ObjectFile' => '601-ShtImage4.png',
        	'UpdatedBy' => '1',
        ]);

        // 609 Product

        ProductDetail::create([
            'LangCode' => 'EN',
            'BaseNBR' => '609',
            'ObjectSequence' => '1',
            'ObjectName' => 'Front View',
            'ObjectFile' => '609-ShtImage2.png',
            'UpdatedBy' => '1',
        ]);

        ProductDetail::create([
            'LangCode' => 'EN',
            'BaseNBR' => '609',
            'ObjectSequence' => '2',
            'ObjectName' => 'Side View',
            'ObjectFile' => '609-ShtImage3.png',
            'UpdatedBy' => '1',
        ]);

        ProductDetail::create([
            'LangCode' => 'EN',
            'BaseNBR' => '609',
            'ObjectSequence' => '3',
            'ObjectName' => 'Other View',
            'ObjectFile' => '609-ShtImage4.png',
            'UpdatedBy' => '1',
        ]);

        ProductDetail::create([
            'LangCode' => 'EN',
            'BaseNBR' => '609',
            'ObjectSequence' => '4',
            'ObjectName' => 'Inside View',
            'ObjectFile' => '609-ProdImage.png',
            'UpdatedBy' => '1',
        ]);

        ProductDetail::create([
            'LangCode' => 'EN',
            'BaseNBR' => '609',
            'ObjectSequence' => '5',
            'ObjectName' => 'Detail View',
            'ObjectFile' => '609-ShtImage1.png',
            'UpdatedBy' => '1',
        ]);

    }
}
