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
        	'BaseNBR' => 601,
        	'ProdName' => '3-Drawer Pine Chest',
        	'ProdDesc' => 'Gerrans Chest',
        	'ProdProse' => 'This chest of drawers made of pine and poplar.  With a recipe of dye and glaze, its finish shows off a Regency style suitable for either bedroom or office.  Solid wood surrounds three drawers to endure through ages.  All wood is cut, shaped and fitted within a small Las Vegas workshop.  The result bears the Vicarswood emblem distinguishes it for any furniture collection.

				Inspired by travels, this piece became the first of the Aylsham Series.  It was the same time tools were passed from father to son and apprentice became master.  Now this chest is sold many times “naked,” without finish, where the final artistry of the customer connects and completes the journey.',
			'BasePrice' => 569.00,
			'BaseStdHours' => 10,
			'BaseStdLabor' => 200.00,
			'BaseStdMaterial' => 200.00,
			'BaseStdOverhead' => 100.00,
			'ReleaseDate' => '2018-08-02',
			'Dim_Width' => 24.5,
			'Dim_Length' => 18.5,
			'Dim_Height' => 24.5,
			'Dim_Weight' => 39,
			'UpdatedBy' => 1,
			'CaptionDim' => 'Dimensions (Inches, Width x Length x Height)',
			'CaptionPrice' => 'Price (varies with options selected)',
			'LeadTime' => 10,
			'Terms' => 'Note:  Prices exclude shipping and applicable taxes.  Product finish colors and tones printed from catalogs or from the Internet may vary from actual manufacturing processes.   All sales are subject to Sales Terms and Conditions.',
        ]);

        Product::create([
        	'LangCode' => 'ES',
        	'BaseNBR' => 601,
        	'ProdName' => 'Cofre de pino de 3 gavetas',
        	'ProdDesc' => 'Cofre de Walsham',
        	'ProdProse' => 'Esta cómoda hecha de pino y álamo. Muestra el estilo Regency adecuado para dormitorio u oficina. La madera maciza rodea tres cajones para soportar a través de las edades. Toda la madera se corta, se forma y se monta dentro de un pequeño taller de Las Vegas. El resultado lleva el emblema de Vicarswood lo distingue para cualquier colección de muebles.

				Inspirada en los viajes, esta pieza se convirtió en la primera de la serie Aylsham. Era el mismo momento en que las herramientas pasaban de padre a hijo y el aprendiz se convertía en maestro. Ahora este cofre se vende muchas veces "desnudo", sin acabado, donde el arte final del cliente se conecta y completa el viaje.',
			'BasePrice' => 569.00,
			'BaseStdHours' => 10,
			'BaseStdLabor' => 200.00,
			'BaseStdMaterial' => 200.00,
			'BaseStdOverhead' => 100.00,
			'ReleaseDate' => '2018-08-02',
			'Dim_Width' => 24.5,
			'Dim_Length' => 18.5,
			'Dim_Height' => 24.5,
			'Dim_Weight' => 39,
			'UpdatedBy' => 1,
			'CaptionDim' => 'Dimensiones (Pulgadas, ancho x largo x alto)',
			'CaptionPrice' => 'Precio (varia según las opciones seleccionadas)',
			'LeadTime' => 10,
			'Terms' => 'Note:  Prices exclude shipping and applicable taxes.  Product finish colors and tones printed from catalogs or from the Internet may vary from actual manufacturing processes.   All sales are subject to Sales Terms and Conditions.',
        ]);

        Product::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => 603,
        	'ProdName' => '3-Drawer Pine Chest',
        	'ProdDesc' => 'Portloe Chest',
        	'ProdProse' => 'This chest of drawers is a spin from the Walsham Chest.  Where it was wide; now it is narrow and finds its position in smaller quarters.

				Adding the right piece of furniture can underline your personality.  Once you’ve found it, Vicarswood offers selectable finishes and hardware to refine the choice.  As each piece is made, it’s not uncommon to quote commissioned.  If your desire is beyond the options commercially available, reach out with an enquiry. We’d like to help underline that personality.

				Its finish is a lasting as customizable.  There may be endless combinations suitable for your specific environment.  In the meantime, the tried and favorites are offered with on-line orders involving a six-coat process.',
			'BasePrice' => 569.00,
			'BaseStdHours' => 10,
			'BaseStdLabor' => 200.00,
			'BaseStdMaterial' => 200.00,
			'BaseStdOverhead' => 100.00,
			'ReleaseDate' => '2018-08-02',
			'Dim_Width' => 24.5,
			'Dim_Length' => 18.5,
			'Dim_Height' => 24.5,
			'Dim_Weight' => 39,
			'UpdatedBy' => 1,
			'CaptionDim' => 'Dimensions (Inches, Width x Length x Height)',
			'CaptionPrice' => 'Price (varies with options selected)',
			'LeadTime' => 10,
			'Terms' => 'Note:  Prices exclude shipping and applicable taxes.  Product finish colors and tones printed from catalogs or from the Internet may vary from actual manufacturing processes.   All sales are subject to Sales Terms and Conditions.',
        ]);

        Product::create([
        	'LangCode' => 'ES',
        	'BaseNBR' => 603,
        	'ProdName' => 'Cofre de pino de 3 gavetas',
        	'ProdDesc' => 'Cofre de Walsham',
        	'ProdProse' => 'Esta cómoda hecha de pino y álamo. Muestra el estilo Regency adecuado para dormitorio u oficina. La madera maciza rodea tres cajones para soportar a través de las edades. Toda la madera se corta, se forma y se monta dentro de un pequeño taller de Las Vegas. El resultado lleva el emblema de Vicarswood lo distingue para cualquier colección de muebles.

				Inspirada en los viajes, esta pieza se convirtió en la primera de la serie Aylsham. Era el mismo momento en que las herramientas pasaban de padre a hijo y el aprendiz se convertía en maestro. Ahora este cofre se vende muchas veces "desnudo", sin acabado, donde el arte final del cliente se conecta y completa el viaje.',
			'BasePrice' => 569.00,
			'BaseStdHours' => 10,
			'BaseStdLabor' => 200.00,
			'BaseStdMaterial' => 200.00,
			'BaseStdOverhead' => 100.00,
			'ReleaseDate' => '2018-08-02',
			'Dim_Width' => 24.5,
			'Dim_Length' => 18.5,
			'Dim_Height' => 24.5,
			'Dim_Weight' => 39,
			'UpdatedBy' => 1,
			'CaptionDim' => 'Dimensiones (Pulgadas, ancho x largo x alto)',
			'CaptionPrice' => 'Precio (varia según las opciones seleccionadas)',
			'LeadTime' => 10,
			'Terms' => 'Note:  Prices exclude shipping and applicable taxes.  Product finish colors and tones printed from catalogs or from the Internet may vary from actual manufacturing processes.   All sales are subject to Sales Terms and Conditions.',
        ]);

        Product::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => 605,
        	'ProdName' => 'Pine File Cabinet',
        	'ProdDesc' => 'Tregony File Cabinet',
        	'ProdProse' => 'This chest of drawers is a spin from the Walsham Chest.  Where it was wide; now it is narrow and finds its position in smaller quarters.

				Adding the right piece of furniture can underline your personality.  Once you’ve found it, Vicarswood offers selectable finishes and hardware to refine the choice.  As each piece is made, it’s not uncommon to quote commissioned.  If your desire is beyond the options commercially available, reach out with an enquiry. We’d like to help underline that personality.

				Its finish is a lasting as customizable.  There may be endless combinations suitable for your specific environment.  In the meantime, the tried and favorites are offered with on-line orders involving a six-coat process.',
			'BasePrice' => 569.00,
			'BaseStdHours' => 10,
			'BaseStdLabor' => 200.00,
			'BaseStdMaterial' => 200.00,
			'BaseStdOverhead' => 100.00,
			'ReleaseDate' => '2018-08-02',
			'Dim_Width' => 24.5,
			'Dim_Length' => 18.5,
			'Dim_Height' => 24.5,
			'Dim_Weight' => 39,
			'UpdatedBy' => 1,
			'CaptionDim' => 'Dimensions (Inches, Width x Length x Height)',
			'CaptionPrice' => 'Price (varies with options selected)',
			'LeadTime' => 10,
			'Terms' => 'Note:  Prices exclude shipping and applicable taxes.  Product finish colors and tones printed from catalogs or from the Internet may vary from actual manufacturing processes.   All sales are subject to Sales Terms and Conditions.',
        ]);

        Product::create([
        	'LangCode' => 'ES',
        	'BaseNBR' => 605,
        	'ProdName' => 'Cofre de pino de 3 gavetas',
        	'ProdDesc' => 'Cofre de Walsham',
        	'ProdProse' => 'Esta cómoda hecha de pino y álamo. Muestra el estilo Regency adecuado para dormitorio u oficina. La madera maciza rodea tres cajones para soportar a través de las edades. Toda la madera se corta, se forma y se monta dentro de un pequeño taller de Las Vegas. El resultado lleva el emblema de Vicarswood lo distingue para cualquier colección de muebles.

				Inspirada en los viajes, esta pieza se convirtió en la primera de la serie Aylsham. Era el mismo momento en que las herramientas pasaban de padre a hijo y el aprendiz se convertía en maestro. Ahora este cofre se vende muchas veces "desnudo", sin acabado, donde el arte final del cliente se conecta y completa el viaje.',
			'BasePrice' => 569.00,
			'BaseStdHours' => 10,
			'BaseStdLabor' => 200.00,
			'BaseStdMaterial' => 200.00,
			'BaseStdOverhead' => 100.00,
			'ReleaseDate' => '2018-08-02',
			'Dim_Width' => 24.5,
			'Dim_Length' => 18.5,
			'Dim_Height' => 24.5,
			'Dim_Weight' => 39,
			'UpdatedBy' => 1,
			'CaptionDim' => 'Dimensiones (Pulgadas, ancho x largo x alto)',
			'CaptionPrice' => 'Precio (varia según las opciones seleccionadas)',
			'LeadTime' => 10,
			'Terms' => 'Note:  Prices exclude shipping and applicable taxes.  Product finish colors and tones printed from catalogs or from the Internet may vary from actual manufacturing processes.   All sales are subject to Sales Terms and Conditions.',
        ]);

        Product::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => 609,
        	'ProdName' => 'Smugglers Chest',
        	'ProdDesc' => 'Penzance Chest',
        	'ProdProse' => 'You may not  attempt transporting contraband across borders but this chest conceals valuables from discovery, or even theft.  In the absence of a fire-proof safe, store those items in the Penzance Chest.  Its drawers close to a false back leaving a protected compartment only accessible by removing its detachable top.    There is a solid bottom, so its disguise remains effective even when all the drawers are removed.  

				The Penzance Chest offers a level deception against the uncontrolled home invasion.  Available in either a three-drawers or configured for hanging folders, the construction is consistent with Vicarswood workmanship and it can endure most beatings preserving its secret location. 

				Its finish is as lasting as customizable.  There may be endless combinations suitable for your specific environment.  In the meantime, the tried and favorites are offered with on-line orders involving a six-coat process.',
			'BasePrice' => 598.00,
			'BaseStdHours' => 0,
			'BaseStdLabor' => 100.00,
			'BaseStdMaterial' => 50.00,
			'BaseStdOverhead' => 120.00,
			'ReleaseDate' => '2018-08-02',
			'Dim_Width' => 24.5,
			'Dim_Length' => 18.5,
			'Dim_Height' => 24.5,
			'Dim_Weight' => 39,
			'UpdatedBy' => 1,
			'CaptionDim' => 'Dimensions (Inches, Width x Length x Height)',
			'CaptionPrice' => 'Price (varies with options selected)',
			'LeadTime' => 10,
			'Terms' => 'Note:  Prices exclude shipping and applicable taxes.  Product finish colors and tones printed from catalogs or from the Internet may vary from actual manufacturing processes.   All sales are subject to Sales Terms and Conditions.',

        ]);

        Product::create([
        	'LangCode' => 'ES',
        	'BaseNBR' => 609,
        	'ProdName' => 'Cofre de pino de 3 gavetas',
        	'ProdDesc' => 'Cofre de Walsham',
        	'ProdProse' => 'Esta cómoda hecha de pino y álamo. Muestra el estilo Regency adecuado para dormitorio u oficina. La madera maciza rodea tres cajones para soportar a través de las edades. Toda la madera se corta, se forma y se monta dentro de un pequeño taller de Las Vegas. El resultado lleva el emblema de Vicarswood lo distingue para cualquier colección de muebles.

				Inspirada en los viajes, esta pieza se convirtió en la primera de la serie Aylsham. Era el mismo momento en que las herramientas pasaban de padre a hijo y el aprendiz se convertía en maestro. Ahora este cofre se vende muchas veces "desnudo", sin acabado, donde el arte final del cliente se conecta y completa el viaje.',
			'BasePrice' => 598.00,
			'BaseStdHours' => 10,
			'BaseStdLabor' => 200.00,
			'BaseStdMaterial' => 200.00,
			'BaseStdOverhead' => 100.00,
			'ReleaseDate' => '2018-08-02',
			'Dim_Width' => 24.5,
			'Dim_Length' => 18.5,
			'Dim_Height' => 24.5,
			'Dim_Weight' => 39,
			'UpdatedBy' => 1,
			'CaptionDim' => 'Dimensiones (Pulgadas, ancho x largo x alto)',
			'CaptionPrice' => 'Precio (varia según las opciones seleccionadas)',
			'LeadTime' => 10,
			'Terms' => 'Note:  Prices exclude shipping and applicable taxes.  Product finish colors and tones printed from catalogs or from the Internet may vary from actual manufacturing processes.   All sales are subject to Sales Terms and Conditions.',
        ]);

        Product::create([
        	'LangCode' => 'EN',
        	'BaseNBR' => 705,
        	'ProdName' => '2-Pedistal Pine Desk',
        	'ProdDesc' => 'Percuil Desk',
        	'ProdProse' => 'Here we have this superb Regency style desk, unusual for this design, made of pine and poplar.  It finishes on a plinth base with three drawers/combinations forming each pedestal.  The maker label is found on each drawer, Vicarswood, a unique workshop relocated to the Las Vegas environs after the demise of Papa Sargeant.

				Desirable rounded corners, this desk was constructed in three parts, something that is important to show that it was always a desk.  Having three drawers along the top and standing on the pedestals, each with 3 graduated drawers

				Stunning craftmanship of old age, this handsome two pedestal desk is an example of Regency furniture.  Lovely oil finish, Green tooled leather writing surface with gilt embossing provides elegance within humility.  This desk is finished all around with paneled back so can be used away from the wall.

				When you choose to purchase an item from Vicarswood, you will be purchasing a piece that will enhance your home.  We spend time choosing the best product, applying the patience still demanded by workmanship standards and standing behind our work.',
			'BasePrice' => 4252.00,
			'BaseStdHours' => 0,
			'BaseStdLabor' => 100.00,
			'BaseStdMaterial' => 50.00,
			'BaseStdOverhead' => 120.00,
			'ReleaseDate' => '2018-08-02',
			'Dim_Width' => 60,
			'Dim_Length' => 24.5,
			'Dim_Height' => 29,
			'Dim_Weight' => 103,
			'UpdatedBy' => 1,
			'CaptionDim' => 'Dimensions (Inches, Width x Length x Height)',
			'CaptionPrice' => 'Price (varies with options selected)',
			'LeadTime' => 10,
			'Terms' => 'Note:  Prices exclude shipping and applicable taxes.  Product finish colors and tones printed from catalogs or from the Internet may vary from actual manufacturing processes.   All sales are subject to Sales Terms and Conditions.',

        ]);

        Product::create([
        	'LangCode' => 'ES',
        	'BaseNBR' => 705,
        	'ProdName' => 'Cofre de pino de 3 gavetas',
        	'ProdDesc' => 'Cofre de Walsham',
        	'ProdProse' => 'Esta cómoda hecha de pino y álamo. Muestra el estilo Regency adecuado para dormitorio u oficina. La madera maciza rodea tres cajones para soportar a través de las edades. Toda la madera se corta, se forma y se monta dentro de un pequeño taller de Las Vegas. El resultado lleva el emblema de Vicarswood lo distingue para cualquier colección de muebles.

				Inspirada en los viajes, esta pieza se convirtió en la primera de la serie Aylsham. Era el mismo momento en que las herramientas pasaban de padre a hijo y el aprendiz se convertía en maestro. Ahora este cofre se vende muchas veces "desnudo", sin acabado, donde el arte final del cliente se conecta y completa el viaje.',
			'BasePrice' => 4252.00,
			'BaseStdHours' => 10,
			'BaseStdLabor' => 200.00,
			'BaseStdMaterial' => 200.00,
			'BaseStdOverhead' => 100.00,
			'ReleaseDate' => '2018-08-02',
			'Dim_Width' => 60,
			'Dim_Length' => 24.5,
			'Dim_Height' => 29,
			'Dim_Weight' => 103,
			'UpdatedBy' => 1,
			'CaptionDim' => 'Dimensiones (Pulgadas, ancho x largo x alto)',
			'CaptionPrice' => 'Precio (varia según las opciones seleccionadas)',
			'LeadTime' => 10,
			'Terms' => 'Note:  Prices exclude shipping and applicable taxes.  Product finish colors and tones printed from catalogs or from the Internet may vary from actual manufacturing processes.   All sales are subject to Sales Terms and Conditions.',
        ]);
    }
}
