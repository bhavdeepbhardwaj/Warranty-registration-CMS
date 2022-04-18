<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product_models')->insert([
            [
                'name'                  => 'MIRROR',
                'model_number'          => 'NS14A14567',
                'products_id'           => '5',
            ],
            [
                'name'                  => 'MIRROR',
                'model_number'          => 'NS14A2099',
                'products_id'           => '5',
            ],
            [
                'name'                  => 'MIRROR',
                'model_number'          => 'NS14A200567889',
                'products_id'           => '5',
            ],
            [
                'name'                  => 'MIRROR',
                'model_number'          => 'NS14A23SDGHH',
                'products_id'           => '5',
            ],
            [
                'name'                  => 'MOUSE',
                'model_number'          => 'NS14A1FGHSAF',
                'products_id'           => '6',
            ],
            [
                'name'                  => 'MOUSE',
                'model_number'          => 'MDS14A4FJASEFA',
                'products_id'           => '6',
            ],
            [
                'name'                  => 'MOUSE',
                'model_number'          => 'MDS14A4SASDFVZ',
                'products_id'           => '6',
            ],
            [
                'name'                  => 'MOUSE',
                'model_number'          => 'MDS14A4SA3425',
                'products_id'           => '6',
            ],
            [
                'name'                  => 'LAPTOP CHARGER ',
                'model_number'          => 'MDS14A4889DSCSD',
                'products_id'           => '7',
            ],
            [
                'name'                  => 'LAPTOP CHARGER ',
                'model_number'          => 'MDS14A4343424',
                'products_id'           => '7',
            ],[
                'name'                  => 'LAPTOP CHARGER ',
                'model_number'          => 'MDS14A4366ZXVZ',
                'products_id'           => '7',
            ],
            [
                'name'                  => 'SLEEVE',
                'model_number'          => 'MDS14A43422AFS',
                'products_id'           => '8',
            ],
            [
                'name'                  => 'SLEEVE',
                'model_number'          => 'MDS14A4342MM',
                'products_id'           => '8',
            ],
            [
                'name'                  => 'DOMUS BULB',
                'model_number'          => 'MDS14A4342MM6789',
                'products_id'           => '9',
            ],
            [
                'name'                  => 'DOMUS BULB',
                'model_number'          => 'MDS14A4342MM1231',
                'products_id'           => '9',
            ],
            [
                'name'                  => 'DOMUS LED',
                'model_number'          => 'MDS14A4342MM123121',
                'products_id'           => '10',
            ],
            [
                'name'                  => 'DOMUS LED',
                'model_number'          => 'MDS14A4342MM123121414',
                'products_id'           => '10',
            ],
        ]);
    }
}
