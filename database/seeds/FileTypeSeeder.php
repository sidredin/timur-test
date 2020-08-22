<?php

use Illuminate\Database\Seeder;
use App\Models\FileType;

class FileTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(FileType::class, 5)->create();
    }
}
