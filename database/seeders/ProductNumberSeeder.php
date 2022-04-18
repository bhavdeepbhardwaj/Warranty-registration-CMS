<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductNumberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_numbers')->insert([
            [
                'product_model_id'          => '1',
                'product_number'          => 'NS14A1001',
            ],
            [
                'product_model_id'          => '2',
                'product_number'          => 'NS14A2001',
            ],
            [
                'product_model_id'          => '7',
                'product_number'          => 'NS14A1002',
            ],
            [
                'product_model_id'          => '8',
                'product_number'          => 'NS14A2002',
            ],
            [
                'product_model_id'          => '19',
                'product_number'          => 'NS14A1003',
            ],
            [
                'product_model_id'          => '20',
                'product_number'          => 'NS14A2003',
            ],
            [
                'product_model_id'          => '3',
                'product_number'          => 'NS14A20KLM',
            ],
            [
                'product_model_id'          => '4',
                'product_number'          => 'NS14A23KMVF',
            ],
            [
                'product_model_id'          => '21',
                'product_number'          => 'NS14A200OOMH',
            ],
            [
                'product_model_id'          => '22',
                'product_number'          => 'NS14A23SD456',
            ],
            [
                'product_model_id'          => '9',
                'product_number'          => 'NS14A20OOMH',
            ],
            [
                'product_model_id'          => '10',
                'product_number'          => 'NS14A23SD456',
            ],
            [
                'product_model_id'          => '5',
                'product_number'          => 'NS14A10OOMH',
            ],
            [
                'product_model_id'          => '6',
                'product_number'          => 'MDS14A43SD456',
            ],
            [
                'product_model_id'          => '11',
                'product_number'          => 'NS14A10OOMH',
            ],
            [
                'product_model_id'          => '12',
                'product_number'          => 'MDS14A43SD456',
            ],
            [
                'product_model_id'          => '31',
                'product_number'          => 'NS14A145670OOMH',
            ],
            [
                'product_model_id'          => '32',
                'product_number'          => 'NS14A2099SD456',
            ],
            [
                'product_model_id'          => '33',
                'product_number'          => 'NS14A20056788920OOMH',
            ],
            [
                'product_model_id'          => '34',
                'product_number'          => 'NS14A23SDGHH3SD456',
            ],
            [
                'product_model_id'          => '35',
                'product_number'          => 'NS14A1FGHSAF8920OOMH',
            ],
            [
                'product_model_id'          => '36',
                'product_number'          => 'MDS14A4FJASEFAHH3SD456',
            ],
            [
                'product_model_id'          => '39',
                'product_number'          => 'MDS14A4889DSCSD20OOMH',
            ],
            [
                'product_model_id'          => '40',
                'product_number'          => 'MDS14A4343424H3SD456',
            ],
            [
                'product_model_id'          => '42',
                'product_number'          => 'MDS14A43422AFSMH',
            ],
            [
                'product_model_id'          => '43',
                'product_number'          => 'MDS14A4342MMB',
            ],
            [
                'product_model_id'          => '44',
                'product_number'          => 'MDS14A4342MM678922AFSMH',
            ],
            [
                'product_model_id'          => '45',
                'product_number'          => 'MDS14A4342MM123142MMB',
            ],
            [
                'product_model_id'          => '46',
                'product_number'          => 'MDS14A4342MM123121AFSMH',
            ],
            [
                'product_model_id'          => '47',
                'product_number'          => 'MDS14A4342MM12312141423142MMB',
            ],
        ]);
    }
}
