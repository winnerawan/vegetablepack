<?php

use Illuminate\Database\Seeder;

class TaxTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Tax::insert([
            'sales' => 100,
            'delivery' => 4000
        ]);
    }
}
