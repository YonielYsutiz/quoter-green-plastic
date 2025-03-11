<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Product;

class ProductsExcelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $filePath = database_path('seeders/data/excel_green_plastic.xlsx');

        $rows = Excel::toArray([], $filePath);

        if (!empty($rows) && isset($rows[0])) {
            foreach ($rows[0] as $row) {
                Product::create([
                    'reference'     => $row[0], // Columna A (Referencia)
                    'name'    => $row[1], // Columna B (Nombre)
                    'description' => $row[2], // Columna C (Descripción)
                    'intern_description' => $row[3], // Columna D (Descripción interna)
                    'warranty' => $row[4] // Columna E (Garantia)
                ]);
            }
        }
    }
}
