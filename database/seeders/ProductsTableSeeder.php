<?php

namespace Database\Seeders;

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
        DB::table('products')->delete();

        DB::table('products')->insert([
            [
                'name' => 'product 1',
                'code' => 'LOC1',
                'status' => 1
            ],
            [
                'name' => 'product 2',
                'code' => 'LOC2',
                'status' => 1
            ],
            [
                'name' => 'product 3',
                'code' => 'LOC3',
                'status' => 1
            ],
            [
                'name' => 'product 4',
                'code' => 'LOC4',
                'status' => 1
            ],
            [
                'name' => 'product 5',
                'code' => 'LOC5',
                'status' => 1
            ],
        ]);
    }
}
