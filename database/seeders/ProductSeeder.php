<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name' => 'LIBER',
                'product_types_id' => 1,
                'extra_warranty' => 1,
            ],
            [
                'name' => 'PURA',
                'product_types_id' => 1,
                'extra_warranty' => 1,
            ],
            [
                'name' => 'PURA E',
                'product_types_id' => 1,
                'extra_warranty' => 1,
            ],
            [
                'name' => 'COSMOS 2-in-1',
                'product_types_id' => 1,
                'extra_warranty' => 1,
            ],
            [
                'name' => 'MOUSE I',
                'product_types_id' => 2,
                'extra_warranty' => 0,
            ],
            [
                'name' => 'MOUSE II',
                'product_types_id' => 2,
                'extra_warranty' => 0,
            ],
            [
                'name'          => 'MOUSE',
                'product_types_id'   => 3,
                'extra_warranty' => 0,
            ],
            [
                'name'          => 'MOUSE',
                'product_types_id'   => 3,
                'extra_warranty' => 0,
            ],
            [
                'name'          => 'DOMUS BULB',
                'product_types_id'   => 4,
                'extra_warranty' => 0,
            ],
            [
                'name'          => 'DOMUS LED',
                'product_types_id'   => 4,
                'extra_warranty' => 0,
            ],
        ]);
    }
}
