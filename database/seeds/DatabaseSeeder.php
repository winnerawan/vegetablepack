<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(AdminTableSeeder::class);
         $this->call(ZonesTableSeeder::class);
         $this->call(DistrictsTableSeeder::class);
         $this->call(VillagesTableSeeder::class);
         $this->call(MerchantsTableSeeder::class);
         $this->call(StoresTableSeeder::class);
         $this->call(CustomersTableSeeder::class);
         $this->call(VegetablesTableSeeder::class);
         $this->call(TaxTableSeeder::class);
    }
}
