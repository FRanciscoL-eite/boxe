<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FighterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('fighters')->delete();

        DB::table('fighters')->insert([
            'name' => 'Pinto da Costa',
            'weight' => '200.4',
            'birthday' => '1840-10-01'
        ]);

        DB::table('fighters')->insert([
            'name' => 'André Vilas Boas',
            'weight' => '200.4',
            'birthday' => '1840-10-01'
        ]);
    }
}
