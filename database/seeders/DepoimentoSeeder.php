<?php

namespace Database\Seeders;

use App\Models\Depoimento;
use Illuminate\Database\Seeder;

class DepoimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Depoimento::factory()->count(10)->create();
    }
}
