<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fights')->insert([
            'fighter1' => 1,
            'fighter2' => 2,
            'data'=> '2026-02-01',
            'local' => 'ESG',
            'liga' => 'Portugal',
            'category_id' => 1,
        ]);


        
    }
}
