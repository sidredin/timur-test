<?php

use Illuminate\Database\Seeder;
use App\Models\HealthStatus;

class HealthStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(HealthStatus::class, 5)->create();
    }
}
