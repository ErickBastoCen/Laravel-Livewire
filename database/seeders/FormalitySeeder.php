<?php

namespace Database\Seeders;

use App\Models\Formalities;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormalitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Formalities::factory()
        ->count(30)
        ->create();
    }
}
