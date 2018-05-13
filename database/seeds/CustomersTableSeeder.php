<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Customer::insert([
            [
                'village_id' => 5,
                'name' => 'Joni',
                'email' => 'joni@gmail.com',
                'password' => bcrypt('joni'),
                'gender' => 'LAKI-LAKI',
                'street' => 'Jl Dummy No 10',
                'rt' => '01',
                'rw' => '04',
                'contact' => '089172561112',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'village_id' => 10,
                'name' => 'Dadang',
                'email' => 'dadang@gmail.com',
                'password' => bcrypt('dadang'),
                'gender' => 'LAKI-LAKI',
                'street' => 'Jl Dummy No 10',
                'rt' => '05',
                'rw' => '01',
                'contact' => '089172561132',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'village_id' => 20,
                'name' => 'Sugeng',
                'email' => 'sugeng@gmail.com',
                'password' => bcrypt('sugeng'),
                'gender' => 'LAKI-LAKI',
                'street' => 'Jl Dummy No 13',
                'rt' => '08',
                'rw' => '03',
                'contact' => '089172564132',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'village_id' => 10,
                'name' => 'Jarwo',
                'email' => 'jarwo@gmail.com',
                'password' => bcrypt('jarwo'),
                'gender' => 'LAKI-LAKI',
                'street' => 'Jl Dummy No 19',
                'rt' => '01',
                'rw' => '02',
                'contact' => '089172511132',
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
    }
}
