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
         $this->call(CountrySeeder::class);
         $this->call(HealthStatusSeeder::class);
         $this->call(PersonSeeder::class);
         $this->call(PhoneTypeSeeder::class);
         $this->call(PhoneSeeder::class);
         $this->call(DocumentSeeder::class);
         $this->call(FileTypeSeeder::class);
         $this->call(FileSeeder::class);
    }
}
