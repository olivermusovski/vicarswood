<?php

use App\ProductFinish;
use Illuminate\Database\Seeder;

class ProductFinishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductFinish::create([
            'code' => 'B',
            'FinishName' => [
                'en' => 'Club Turquoise finish',
                'es' => 'Turquoisa'
            ]
        ]);

        ProductFinish::create([
            'code' => 'C',
            'FinishName' => [
                'en' => 'Cherry finish',
                'es' => 'Cherita'
            ]
        ]);

        ProductFinish::create([
            'code' => 'G',
            'FinishName' => [
                'en' => 'Quayside Green finish',
                'es' => 'Verde'
            ]
        ]);

        ProductFinish::create([
            'code' => 'N',
            'FinishName' => [
                'en' => 'Naked (unfinished)',
                'es' => 'Sin acabado'
            ]
        ]);

        ProductFinish::create([
            'code' => 'O',
            'FinishName' => [
                'en' => 'Sunset Orange finish',
                'es' => 'Oranja'
            ]
        ]);

        ProductFinish::create([
            'code' => 'P',
            'FinishName' => [
                'en' => 'Natural (Pine) finish',
                'es' => 'Pina'
            ]
        ]);

        ProductFinish::create([
            'code' => 'R',
            'FinishName' => [
                'en' => 'Cardinal Red finish',
                'es' => 'Roja'
            ]
        ]);

        ProductFinish::create([
            'code' => 'S',
            'FinishName' => [
                'en' => 'No Shame Pink finish',
                'es' => 'Pinko'
            ]
        ]);
        
    }
}
