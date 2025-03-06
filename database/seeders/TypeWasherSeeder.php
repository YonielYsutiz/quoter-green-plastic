<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeWasherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\TypeWasher::create(
            ['name' => 'Arandela', 'dimensions' => '1/8'],
        );
        \App\Models\TypeWasher::create(
            ['name' => 'Arandela', 'dimensions' => '1/8 - Seguridad'],
        );
        \App\Models\TypeWasher::create(
            ['name' => 'Arandela', 'dimensions' => '1/4'],
        );
    }
}
