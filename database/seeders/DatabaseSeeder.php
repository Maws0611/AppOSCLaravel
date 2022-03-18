<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\pays;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        pays::factory(10)->create();
    }
}
