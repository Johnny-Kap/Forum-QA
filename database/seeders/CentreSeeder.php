<?php

namespace Database\Seeders;

use App\Models\Centre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CentreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Centre::factory()
            ->count(6)
            ->create();
    }
}
