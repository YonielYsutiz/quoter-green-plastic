<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeScrewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\TypeScrews::create(
            ['name' => 'Drywall', 'dimensions' => '8x2'],
        );
        \App\Models\TypeScrews::create(
            ['name' => 'Drywall', 'dimensions' => '10 x 2 1/2'],
        );
        \App\Models\TypeScrews::create(
            ['name' => 'Drywall', 'dimensions' => '12 x 3'],
        );
        \App\Models\TypeScrews::create(
            ['name' => 'Carriage"', 'dimensions' => '4" x 1/8'],
        );
        \App\Models\TypeScrews::create(
            ['name' => 'Carriage', 'dimensions' => '4 1/2" x 1/8'],
        );
        \App\Models\TypeScrews::create(
            ['name' => 'Carriage', 'dimensions' => '5" x 1/8'],
        );
        \App\Models\TypeScrews::create(
            ['name' => 'Carriage', 'dimensions' => '6" x 1/8'],
        );
        \App\Models\TypeScrews::create(
            ['name' => 'Carriage', 'dimensions' => '1/4 x 2 1/2']
        );
    }
}
