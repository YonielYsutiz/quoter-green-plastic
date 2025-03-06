<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeNutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\TypeNut::create(
            ['name' => 'Tuerca', 'dimensions' => '4" x 1/8 '],
        );
        \App\Models\TypeNut::create(
            ['name' => 'Tuerca', 'dimensions' => '4 1/2" x 1/8'],
        );
        \App\Models\TypeNut::create(
            ['name' => 'Tuerca', 'dimensions' => '5" x 1/8'],
        );
        \App\Models\TypeNut::create(
            ['name' => 'Tuerca"', 'dimensions' => '6" x 1/8 '],
        );
        \App\Models\TypeNut::create(
            ['name' => 'Tuerca Hex', 'dimensions' => '1/4-20'],
        );
    }
}
