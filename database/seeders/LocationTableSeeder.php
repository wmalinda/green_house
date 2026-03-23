<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->delete();

        DB::table('locations')->insert([
            [
                'name' => 'locations 1',
                'code' => 'LOC1',
                'status' => 1
            ],
            [
                'name' => 'locations 2',
                'code' => 'LOC2',
                'status' => 1
            ],
            [
                'name' => 'locations 3',
                'code' => 'LOC3',
                'status' => 1
            ],
            [
                'name' => 'locations 4',
                'code' => 'LOC4',
                'status' => 1
            ],
            [
                'name' => 'locations 5',
                'code' => 'LOC5',
                'status' => 1
            ],
        ]);
    }
}
