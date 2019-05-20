<?php

use App\StaticWebPage;
use Illuminate\Database\Seeder;

class StaticWebPagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        StaticWebPage::create([
        	'LangCode' => 'EN',
        	'PageTitle' => 'Privacy and Data Policy',
        	'Page Body' => "We value our customers' privacy.  Vicarswood wants to assure you that we are very careful about how we run our site and about the vendors we choose to use.  We care very much about our customers' satisfaction and privacy.  Our web server is kept behind locked doors in a facility that is staffed and guarded 24 hours a day year-round.  When it is necessary for you to supply sensitive information such as credit card numbers, those communications travel from your browser all the way to our server protected by a Secure Socket Layer (SSL) and are fully encrypted.


				Our Web Site - We have created our web site to provide additional services to our customers and potential customers online.  On our web site you can:
				•	Shop our products securely online,
				•	Download a catalog, and
				•	Give us feedback and ask us questions about our company, products and web site

				Your data.
				•	If you supply us with your postal address, email or phone number online, you may occasionally receive catalogs and mailings from us with information about products, promotions or services.  If you do not wish to receive these mailings, please send us a note or e-mail us your name and mailing address to customercare@vicarswood.com
				•	We DO NOT make any portion of our mailing list or customer emails available to any organizations.  
				•	If you supply us with your phone online, we may use them to contact you regarding an order you sent, or a question you asked.  We do not share these numbers with other organizations.



				Vicarswood’s website and e-mail messages may use 'cookies' and other technologies such as pixel tags and web beacons.  These technologies help us better understand user behavior, tell us which parts of our website people have visited, and facilitate and measure the effectiveness of our communications and web searches.  We treat information collected by cookies and other technologies as non-personal information.  Similarly, to the extent that non-personal information is combined with personal information, we treat the combined information as personal information for the purposes of this Privacy Policy.

				Vicarswood also uses cookies and other technologies to 'remember' how you use our website.  Our goal in these cases is to make your experience with Vicarswood more convenient and personal.  For example, knowing your first name lets us welcome you the next time you visit Vicarswood’s website. Knowing someone using your computer or device has shopped for a certain product helps us make our e-mail communications and product suggestions more relevant to your interests.  You may set your web browser to notify you when you receive a cookie.  However, should you decide not to accept cookies from our sites, you will limit the functionality we can provide when you visit our sites.

				As is true of most websites, our web servers gather some information automatically and store it in log files.   This information includes Internet Protocol (IP) addresses, browser type and language, Internet service provider (ISP), referring and exit pages, operating system, date/time stamp, and clickstream data.   We use this information to understand and analyze trends, to administer the site, to learn about user behavior on the site, and to gather demographic information about our customer base."
        ]);

        StaticWebPage::create([
        	'LangCode' => 'ES',
        	'PageTitle' => 'Política de privacidad y datos',
        	'PageBody' => "
				Valoramos la privacidad de nuestros clientes. Vicarswood quiere asegurarle que tenemos mucho cuidado con la forma en que administramos nuestro sitio y con los proveedores que decidimos utilizar. Nos preocupamos mucho por la satisfacción y privacidad de nuestros clientes. Nuestro servidor web se mantiene detrás de puertas cerradas en una instalación con personal y vigilancia las 24 horas del día durante todo el año. Cuando es necesario que proporcione información confidencial, como números de tarjetas de crédito, esas comunicaciones viajan desde su navegador hasta nuestro servidor protegido por una Capa de sockets seguros (SSL) y están completamente encriptadas."
        ]);
        
    }
}