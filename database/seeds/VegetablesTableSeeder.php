<?php

use Illuminate\Database\Seeder;

class VegetablesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Vegetable::insert([
            [
                'store_id' => 1,
                'name' => 'Brokoli',
                'description' => 'Lorem ipsum dolor sit amet, eam vidit qualisque eu, qui at argumentum voluptatibus. An eam tollit accumsan, debitis reformidans cu per, pro epicurei partiendo incorrupte ea. Nam in epicuri perfecto invenire. Mei option pertinacia te. Mel te porro paulo dolore, vis suas semper impedit ea, est ut vocent legendos.',
                'weight' => '1',
                'price' => '1000',
                'image' => 'brokoli.jpg',
                'is_available' => 1,
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'store_id' => 2,
                'name' => 'Wortel',
                'description' => 'Lorem ipsum dolor sit amet, eam vidit qualisque eu, qui at argumentum voluptatibus. An eam tollit accumsan, debitis reformidans cu per, pro epicurei partiendo incorrupte ea. Nam in epicuri perfecto invenire. Mei option pertinacia te. Mel te porro paulo dolore, vis suas semper impedit ea, est ut vocent legendos.',
                'weight' => '1',
                'price' => '1000',
                'image' => 'wortel.jpg',
                'is_available' => 1,
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'store_id' => 3,
                'name' => 'Cabai',
                'description' => 'Lorem ipsum dolor sit amet, eam vidit qualisque eu, qui at argumentum voluptatibus. An eam tollit accumsan, debitis reformidans cu per, pro epicurei partiendo incorrupte ea. Nam in epicuri perfecto invenire. Mei option pertinacia te. Mel te porro paulo dolore, vis suas semper impedit ea, est ut vocent legendos.',
                'weight' => '1',
                'price' => '1000',
                'image' => 'cabai.jpg',
                'is_available' => 1,
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'store_id' => 4,
                'name' => 'Kubis',
                'description' => 'Lorem ipsum dolor sit amet, eam vidit qualisque eu, qui at argumentum voluptatibus. An eam tollit accumsan, debitis reformidans cu per, pro epicurei partiendo incorrupte ea. Nam in epicuri perfecto invenire. Mei option pertinacia te. Mel te porro paulo dolore, vis suas semper impedit ea, est ut vocent legendos.',
                'weight' => '1',
                'price' => '1000',
                'image' => 'kubis.jpg',
                'is_available' => 1,
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'store_id' => 1,
                'name' => 'Kangkung',
                'description' => 'Lorem ipsum dolor sit amet, eam vidit qualisque eu, qui at argumentum voluptatibus. An eam tollit accumsan, debitis reformidans cu per, pro epicurei partiendo incorrupte ea. Nam in epicuri perfecto invenire. Mei option pertinacia te. Mel te porro paulo dolore, vis suas semper impedit ea, est ut vocent legendos.',
                'weight' => '1',
                'price' => '1000',
                'image' => 'kangkung.jpg',
                'is_available' => 1,
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'store_id' => 2,
                'name' => 'Kentang',
                'description' => 'Lorem ipsum dolor sit amet, eam vidit qualisque eu, qui at argumentum voluptatibus. An eam tollit accumsan, debitis reformidans cu per, pro epicurei partiendo incorrupte ea. Nam in epicuri perfecto invenire. Mei option pertinacia te. Mel te porro paulo dolore, vis suas semper impedit ea, est ut vocent legendos.',
                'weight' => '1',
                'price' => '1000',
                'image' => 'kentang.jpg',
                'is_available' => 1,
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'store_id' => 3,
                'name' => 'Sawi',
                'description' => 'Lorem ipsum dolor sit amet, eam vidit qualisque eu, qui at argumentum voluptatibus. An eam tollit accumsan, debitis reformidans cu per, pro epicurei partiendo incorrupte ea. Nam in epicuri perfecto invenire. Mei option pertinacia te. Mel te porro paulo dolore, vis suas semper impedit ea, est ut vocent legendos.',
                'weight' => '1',
                'price' => '1000',
                'image' => 'sawi.jpg',
                'is_available' => 1,
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],

            [
                'store_id' => 4,
                'name' => 'Bayam',
                'description' => 'Lorem ipsum dolor sit amet, eam vidit qualisque eu, qui at argumentum voluptatibus. An eam tollit accumsan, debitis reformidans cu per, pro epicurei partiendo incorrupte ea. Nam in epicuri perfecto invenire. Mei option pertinacia te. Mel te porro paulo dolore, vis suas semper impedit ea, est ut vocent legendos.',
                'weight' => '1',
                'price' => '1000',
                'image' => 'bayam.jpg',
                'is_available' => 1,
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'store_id' => 1,
                'name' => 'Gambas',
                'description' => 'Lorem ipsum dolor sit amet, eam vidit qualisque eu, qui at argumentum voluptatibus. An eam tollit accumsan, debitis reformidans cu per, pro epicurei partiendo incorrupte ea. Nam in epicuri perfecto invenire. Mei option pertinacia te. Mel te porro paulo dolore, vis suas semper impedit ea, est ut vocent legendos.',
                'weight' => '1',
                'price' => '1000',
                'image' => 'gambas.jpg',
                'is_available' => 1,
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ],
            [
                'store_id' => 2,
                'name' => 'Jagung',
                'description' => 'Lorem ipsum dolor sit amet, eam vidit qualisque eu, qui at argumentum voluptatibus. An eam tollit accumsan, debitis reformidans cu per, pro epicurei partiendo incorrupte ea. Nam in epicuri perfecto invenire. Mei option pertinacia te. Mel te porro paulo dolore, vis suas semper impedit ea, est ut vocent legendos.',
                'weight' => '1',
                'price' => '1000',
                'image' => 'jagung.jpg',
                'is_available' => 1,
                'created_at' => \Carbon\Carbon::now('Asia/Jakarta')
            ]
        ]);
    }
}
