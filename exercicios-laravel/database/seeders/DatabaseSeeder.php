<?php

namespace Database\Seeders;

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
        /* $this->call([
            DocumentosSeeder::class
        ]); */
        \App\Models\User::factory(10)->create();

        \App\Models\Documento::factory(600)->create();
    }
}
