<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\Product;
use App\Models\ProductFeature;

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
                $product = Product::create([
                    'reference'     => $row[0], // Columna A (Referencia)
                    'name'    => $row[1], // Columna B (Nombre)
                    'description' => $row[2], // Columna C (Descripción)
                    'intern_description' => $row[3], // Columna D (Descripción interna)
                    'warranty' => $row[4] // Columna E (Garantia)
                ]);
                ProductFeature::create([
                    'product_id' => $product->id,
                    'upper_profile_amount' => $row[5], // Columna F (perfil superior cantidad)
                    'upper_profile_reference_id' => $row[6], // Columna G (perfil superior referencia ID)
                    'lower_profile_amount' => $row[7], // Columna H (perfil inferior cantidad)
                    'lower_profile_reference' => $row[8], // Columna I (perfil inferior referencia ID)
                    'sleeping_quantity' => $row[9], // Columna J (durmiente cantidad)
                    'sleeping_reference_id' => $row[10], // Columna K (durmiente ID)
                    'number_of_screws' => $row[11], // Columna L (numero de tornillos)
                    'screws_type_id' => $row[12], // Columna M (tipo de tornillos ID)
                    'nut_quantity' => $row[13], // Columna N (cantidad de tuercas)
                    'nut_type_id' => $row[14], // Columna O (tipo de tuerca id)
                    'washer_quantity' => $row[15], // Columna P (cantidad de arandelas)
                    'washer_type_id' => $row[16], // Columna Q (tipo de arandelas id)
                    'entries_quantity' => $row[17], // Columna R (cantidad de entradas)
                    'resistance_static' => $row[18], // Columna S (resistencia estatica KG)
                    'resistance_dynamic' => $row[19], // Columna T (resistencia dinamica KG)
                    'resistance_vacuum' => $row[20], // Columna U (resistencia al vacio KG)
                ]);
            }
        }
    }
}
