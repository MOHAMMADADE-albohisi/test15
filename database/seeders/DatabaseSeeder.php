<?php

use App\Models\Category;
use Database\Factories\categorieFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Category::factory(10)->create();
    }
}
