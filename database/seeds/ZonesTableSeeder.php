<?php

use Illuminate\Database\Seeder;

class ZonesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Zone::insert([
            'name' => 'Kota Madiun',
        ]);
        \App\Zone::insert([
            'name' => 'Kabuputan Madiun',
        ]);
    }
}
