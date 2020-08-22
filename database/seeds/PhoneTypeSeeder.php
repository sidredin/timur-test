<?php

use Illuminate\Database\Seeder;
use App\Models\PhoneType;

class PhoneTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(PhoneType::class, 3)->create();
    }
}
