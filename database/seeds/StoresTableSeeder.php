<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Store::insert(
            [
                'merchant_id' => 1,
                'village_id' => 5,
                'rt' => '01',
                'rw' => '05',
                'name' => 'Agus Sayur',
                'description' => 'Lorem ipsum dolor sit amet, eam vidit qualisque eu, qui at argumentum voluptatibus. An eam tollit accumsan, debitis reformidans cu per, pro epicurei partiendo incorrupte ea. Nam in epicuri perfecto invenire. Mei option pertinacia te. Mel te porro paulo dolore, vis suas semper impedit ea, est ut vocent legendos.',
                'contact' => '087712345678',
                'street' => 'Jl. Dummy No 3',
                'image' => 'tokosayura.jpg',
                'open' => '05:00',
                'close' => '12:00',
                'is_active' => 1,
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'merchant_id' => 2,
                'village_id' => 10,
                'rt' => '04',
                'rw' => '09',
                'name' => 'Bambang Sayur',
                'description' => 'Lorem ipsum dolor sit amet, eam vidit qualisque eu, qui at argumentum voluptatibus. An eam tollit accumsan, debitis reformidans cu per, pro epicurei partiendo incorrupte ea. Nam in epicuri perfecto invenire. Mei option pertinacia te. Mel te porro paulo dolore, vis suas semper impedit ea, est ut vocent legendos.',
                'contact' => '087712345678',
                'street' => 'Jl. Dummy No 5',
                'image' => 'tokosayurb.jpg',
                'open' => '05:00',
                'close' => '11:00',
                'is_active' => 1,
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'merchant_id' => 3,
                'village_id' => 15,
                'rt' => '11',
                'rw' => '05',
                'name' => 'Paijo Sayur',
                'description' => 'Lorem ipsum dolor sit amet, eam vidit qualisque eu, qui at argumentum voluptatibus. An eam tollit accumsan, debitis reformidans cu per, pro epicurei partiendo incorrupte ea. Nam in epicuri perfecto invenire. Mei option pertinacia te. Mel te porro paulo dolore, vis suas semper impedit ea, est ut vocent legendos.',
                'contact' => '087712345678',
                'street' => 'Jl. Dummy No 9',
                'image' => 'tokosayurc.jpg',
                'open' => '05:00',
                'close' => '10:00',
                'is_active' => 1,
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'merchant_id' => 4,
                'village_id' => 20,
                'rt' => '01',
                'rw' => '05',
                'name' => 'Painem Sayur',
                'description' => 'Lorem ipsum dolor sit amet, eam vidit qualisque eu, qui at argumentum voluptatibus. An eam tollit accumsan, debitis reformidans cu per, pro epicurei partiendo incorrupte ea. Nam in epicuri perfecto invenire. Mei option pertinacia te. Mel te porro paulo dolore, vis suas semper impedit ea, est ut vocent legendos.',
                'contact' => '087712345678',
                'street' => 'Jl. Dummy No 11',
                'image' => 'tokosayurd.jpg',
                'open' => '05:00',
                'close' => '09:00',
                'is_active' => 1,
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        );
    }
}
