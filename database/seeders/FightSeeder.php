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
            'fighter1' => 11,
            'fighter2' => 3,
            'data'=> '2026-02-17',
            'local' => 'Riyadh, Arábia Saudita,',
            'liga' => 'WBC,WBA,IBF,WBO',
            'category_id' => 7,
        ]); 

        DB::table('fights')->insert([
            'fighter1' => 8,
            'fighter2' => 9,
            'data'=> '2026-03-25',
            'local' => 'Las Vegas, EUA',
            'liga' => 'WBC,WBA,IBF',
            'category_id' => 9,
        ]); 

        DB::table('fights')->insert([
            'fighter1' => 4,
            'fighter2' => 12,
            'data'=> '2026-05-04',
            'local' => 'T-Mobile Arena, Las Vegas, EUA',
            'liga' => 'WBC,WBA,IBF,WBO',
            'category_id' => 14,
        ]); 

        DB::table('fights')->insert([
            'fighter1' => 1,
            'fighter2' => 13,
            'data'=> '2026-04-20',
            'local' => 'Madison Square Garden, Nova York, EUA',
            'liga' => 'IBF,WBO',
            'category_id' => 12,
        ]); 
        
        DB::table('fights')->insert([
            'fighter1' => 2,
            'fighter2' => 14,
            'data'=> '2026-12-26',
            'local' => 'Toquio, Japão',
            'liga' => 'WBC,WBA,IBF,WBO',
            'category_id' => 5,
        ]); 

        DB::table('fights')->insert([
            'fighter1' => 15,
            'fighter2' => 16,
            'data'=> '2026-12-26',
            'local' => 'Riyadh, Arabia Saudita',
            'liga' => 'WBC Eliminator',
            'category_id' => 17,
        ]);
        
        DB::table('fights')->insert([
            'fighter1' => 17,
            'fighter2' => 7,
            'data'=> '2026-06-15',
            'local' => ' Barclays, Brooklyn, EUA',
            'liga' => 'WBC',
            'category_id' => 9,
        ]);
        
        DB::table('fights')->insert([
            'fighter1' => 6,
            'fighter2' => 7,
            'data'=> '2026-08-12',
            'local' => 'Londres, Reino Unido',
            'liga' => 'WBC,WBA,IBF,WBO',
            'category_id' => 15,
        ]);
        
        DB::table('fights')->insert([
            'fighter1' => 18,
            'fighter2' => 19,
            'data'=> '2026-07-29',
            'local' => 'Wembley Stadium, Londres, Reino Unido',
            'liga' => 'Evento Especial',
            'category_id' => 16,
        ]);

        DB::table('fights')->insert([
            'fighter1' => 20,
            'fighter2' => 21,
            'data'=> '2026-09-5',
            'local' => 'Crypto.com Arena, Los Angeles, EUA',
            'liga' => 'WBC Eliminator',
            'category_id' => 9,
        ]);         
    }
}
