<?php

namespace Database\Seeders;

use App\Models\Baju;
use Illuminate\Database\Seeder;

class BajuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Baju::factory(50)->create();
    }
}
