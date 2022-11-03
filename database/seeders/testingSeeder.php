<?php

namespace Database\Seeders;

use App\Models\testing;
use Database\Factories\categorieFactory;
use Illuminate\Database\Seeder;

class testingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        categorieFactory::factory(10)->create();
    }
}
