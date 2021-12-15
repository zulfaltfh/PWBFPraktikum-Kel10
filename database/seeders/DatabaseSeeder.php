<?php

namespace Database\Seeders;

use App\Models\Kota;
use App\Models\Ukuran;
use App\Models\Warna;
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
        Ukuran::factory(5)->create();
        Warna::factory(25)->create();
        Kota::factory(25)->create();
    }
}
