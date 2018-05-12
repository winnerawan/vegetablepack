<?php

use Illuminate\Database\Seeder;

class MerchantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Merchant::insert(
            [
                'name' => 'Agus',
                'email' => 'agus@gmail.com',
                'password' => bcrypt('agus'),
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'name' => 'Bambang',
                'email' => 'bambang@gmail.com',
                'password' => bcrypt('bambang'),
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'name' => 'Paijo',
                'email' => 'paijo@gmail.com',
                'password' => bcrypt('paijo'),
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'name' => 'Painem',
                'email' => 'painem@gmail.com',
                'password' => bcrypt('painem'),
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        );
    }
}
