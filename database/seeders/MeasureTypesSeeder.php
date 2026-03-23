<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MeasureTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('measure_types')->delete();

        DB::table('measure_types')->insert([
            [
                'name' => 'measure types 1',
                'code' => 'MT1',
                'status' => 1
            ],
            [
                'name' => 'measure types 2',
                'code' => 'MT2',
                'status' => 1
            ],
            [
                'name' => 'measure types 3',
                'code' => 'MT3',
                'status' => 1
            ],
            [
                'name' => 'measure types 4',
                'code' => 'MT4',
                'status' => 1
            ],
            [
                'name' => 'measure types 5',
                'code' => 'MT5',
                'status' => 1
            ],
        ]);
    }
}
