<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EdgeDevicesTableSeeder extends Seeder
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
                'name' => 'edge_device 1',
                'code' => 'ED1',
                'location_id' => '1',
                'status' => 1
            ],
            [
                'name' => 'edge_device 2',
                'code' => 'ED2',
                'location_id' => '1',
                'status' => 1
            ],
            [
                'name' => 'edge_device 3',
                'code' => 'ED3',
                'location_id' => '1',
                'status' => 1
            ],
            [
                'name' => 'edge_device 4',
                'code' => 'ED4',
                'location_id' => '2',
                'status' => 1
            ],
            [
                'name' => 'edge_device 5',
                'code' => 'ED5',
                'location_id' => '2',
                'status' => 1
            ],
        ]);
    }
}
