<?php

use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * KOTA MADIUN
         */
        \App\District::insert([
            'zone_id' => 1,
            'name' => 'Kartoharjo',
        ]);

        \App\District::insert([
            'zone_id' => 1,
            'name' => 'Manguharjo',
        ]);

        \App\District::insert([
            'zone_id' => 1,
            'name' => 'Taman',
        ]);

        /**
         * KABUPATEN MADIUN
         */
        \App\District::insert([
            'zone_id' => 2,
            'name' => 'Kebonsari',
        ]);

        \App\District::insert([
            'zone_id' => 2,
            'name' => 'Geger',
        ]);

        \App\District::insert([
            'zone_id' => 2,
            'name' => 'Dolopo',
        ]);

        \App\District::insert([
            'zone_id' => 2,
            'name' => 'Kebonsari',
        ]);

        \App\District::insert([
            'zone_id' => 2,
            'name' => 'Geger',
        ]);

        \App\District::insert([
            'zone_id' => 2,
            'name' => 'Dagangan',
        ]);

        \App\District::insert([
            'zone_id' => 2,
            'name' => 'Wungu',
        ]);

        \App\District::insert([
            'zone_id' => 2,
            'name' => 'Kare',
        ]);

        \App\District::insert([
            'zone_id' => 2,
            'name' => 'Gemarang',
        ]);

        \App\District::insert([
            'zone_id' => 2,
            'name' => 'Saradan',
        ]);

        \App\District::insert([
            'zone_id' => 2,
            'name' => 'Pilangkenceng',
        ]);

        \App\District::insert([
            'zone_id' => 2,
            'name' => 'Mejayan',
        ]);

        \App\District::insert([
            'zone_id' => 2,
            'name' => 'Wonoasri',
        ]);

        \App\District::insert([
            'zone_id' => 2,
            'name' => 'Balerejo',
        ]);

        \App\District::insert([
            'zone_id' => 2,
            'name' => 'Madiun',
        ]);

        \App\District::insert([
            'zone_id' => 2,
            'name' => 'Sawahan',
        ]);

        \App\District::insert([
            'zone_id' => 2,
            'name' => 'Jiwan',
        ]);
    }
}
