<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Peso Palha',
            'slug' => '47,6kg',  
        ]);
      
        Category::create([
            'name' => 'Peso Mosca-Ligeiro',
            'slug' => '48,9kg',
        ]);
      
        Category::create([
            'name' => 'Peso Mosca',
            'slug' => '50,8kg',            
        ]);
      
        Category::create([
            'name' => 'Peso Galo-Ligeiro',
            'slug' => '52,1kg',            
        ]);

        Category::create([
            'name' => 'Peso Galo',
            'slug' => ' 53,5kg',            
        ]);

        Category::create([
            'name' => 'Peso Pena-Ligeiro',
            'slug' => ' 55,3kg',            
        ]);

        Category::create([
            'name' => 'Peso Pena',
            'slug' => ' 57,1kg',            
        ]);

        Category::create([
            'name' => 'Peso Leve-Ligeiro',
            'slug' => ' 58,9kg',            
        ]);

        Category::create([
            'name' => 'Peso Leve',
            'slug' => ' 61,2kg',            
        ]);

        Category::create([
            'name' => 'Peso Meio-Médio-Ligeiro',
            'slug' => ' 63,5kg',            
        ]);

        Category::create([
            'name' => 'Peso Meio-Médio',
            'slug' => ' 66,6kg',            
        ]);

        Category::create([
            'name' => 'Peso Médio-Ligeiro',
            'slug' => ' 69,8kg',            
        ]);

        Category::create([
            'name' => 'Peso Médio',
            'slug' => ' 72,5kg',            
        ]);

        Category::create([
            'name' => 'Peso Super-Médio',
            'slug' => ' 76,2kg',            
        ]);

        Category::create([
            'name' => 'Peso Meio-Pesado',
            'slug' => ' 79,3kg',            
        ]);

        Category::create([
            'name' => 'Peso Cruzador',
            'slug' => ' 90,7kg',            
        ]);

        Category::create([
            'name' => 'Peso Pesado',
            'slug' => ' +91kg',            
        ]);

    }
}
