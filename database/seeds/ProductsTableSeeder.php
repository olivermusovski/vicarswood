<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => '601',
        	'ProdName' => '3-Drawer Pine Chest',
        	'ProdDesc' => 'Gerrans Chest',
        	'ProdProse' => 'This chest of drawers made of pine and poplar.  With a recipe of dye and glaze, its finish shows off a Regency style suitable for either bedroom or office.  Solid wood surrounds three drawers to endure through ages.  All wood is cut, shaped and fitted within a small Las Vegas workshop.  The result bears the Vicarswood emblem distinguishes it for any furniture collection.

				Inspired by travels, this piece became the first of the Aylsham Series.  It was the same time tools were passed from father to son and apprentice became master.  Now this chest is sold many times “naked,” without finish, where the final artistry of the customer connects and completes the journey.',
			'BasePrice' => '569.00',
			'BaseStdHours' => '10',
			'BaseStdLabor' => '200.00',
			'BaseStdMaterial' => '200.00',
			'BaseStdOverhead' => '100.00',
			'ReleaseDate' => '2018-08-02',
			'Dim_Width' => '24.5',
			'Dim_Length' => '18.5',
			'Dim_Height' => '24.5',
			'Dim_Weight' => '39',
			'UpdatedBy' => '1',
			'CaptionDim' => 'Dimensions (Inches, Width x Length x Height)',
			'CaptionPrice' => 'Price (varies with options selected)',
			'LeadTime' => '10',
			'Terms' => 'Note:  Prices exclude shipping and applicable taxes.  Product finish colors and tones printed from catalogs or from the Internet may vary from actual manufacturing processes.   All sales are subject to Sales Terms and Conditions.',

        ]);

        Product::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => '609',
        	'ProdName' => 'Smugglers Chest',
        	'ProdDesc' => 'Penzance Chest',
        	'ProdProse' => 'You may not  attempt transporting contraband across borders but this chest conceals valuables from discovery, or even theft.  In the absence of a fire-proof safe, store those items in the Penzance Chest.  Its drawers close to a false back leaving a protected compartment only accessible by removing its detachable top.    There is a solid bottom, so its disguise remains effective even when all the drawers are removed.  

				The Penzance Chest offers a level deception against the uncontrolled home invasion.  Available in either a three-drawers or configured for hanging folders, the construction is consistent with Vicarswood workmanship and it can endure most beatings preserving its secret location. ',
			'BasePrice' => '598.00',
			'BaseStdHours' => '0',
			'BaseStdLabor' => '100.00',
			'BaseStdMaterial' => '50.00',
			'BaseStdOverhead' => '120.00',
			'ReleaseDate' => '2018-08-02',
			'Dim_Width' => '24.5',
			'Dim_Length' => '18.5',
			'Dim_Height' => '24.5',
			'Dim_Weight' => '39',
			'UpdatedBy' => '1',
			'CaptionDim' => 'Dimensions (Inches, Width x Length x Height)',
			'CaptionPrice' => 'Price (varies with options selected)',
			'LeadTime' => '10',
			'Terms' => 'Note:  Prices exclude shipping and applicable taxes.  Product finish colors and tones printed from catalogs or from the Internet may vary from actual manufacturing processes.   All sales are subject to Sales Terms and Conditions.',

        ]);
    }
}
