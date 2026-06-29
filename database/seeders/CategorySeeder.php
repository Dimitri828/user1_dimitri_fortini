<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("categories")->insert([
            ['name' => 'Sport'],
            ['name' => 'Tecnologia'],
            ['name' => 'Musica'],
            ['name' => 'Cinema'],
            ['name' => 'Viaggi'],
            ['name' => 'Cucina'],
            ['name' => 'Salute'],
            ['name' => 'Libri'],
            ['name' => 'Arte'],
            ['name' => 'Scienza'],
        ]);
    }
}
