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
            'name' => 'Terence Crawford',
            'weight' => 66.7,
            'birthday' => '1987/09/29',
        ]);

        DB::table('fighters')->insert([
            'name' => 'Naoya Inoue',
            'weight' => 55.3,
            'birthday' => '1993/04/10'
        ]);

         DB::table('fighters')->insert([
             'name' => 'Oleksandr Usyk',
             'weight' => 100.3,
             'birthday' => '1987/01/17'
         ]);

         DB::table('fighters')->insert([
             'name' => 'Canelo Álvarez',
             'weight' => 76.2,
             'birthday' => '1990/07/18'
         ]);

         DB::table('fighters')->insert([
             'name' => 'Artur Beterbiev',
             'weight' => 79.4,
             'birthday' => '1985/01/21'
         ]);

         DB::table('fighters')->insert([
             'name' => 'Dmitry Bivol',
             'weight' => 79.4,
             'birthday' => '1990/12/18'
         ]);

         DB::table('fighters')->insert([
             'name' => 'Devin Haney',
             'weight' => 61.2,
             'birthday' => '1998/11/17'
         ]);

         DB::table('fighters')->insert([
             'name' => 'Gervonta Davis',
             'weight' => 61.2,
             'birthday' => '1994/11/07'
         ]);

         DB::table('fighters')->insert([
             'name' => 'Shakur Stevenson',
             'weight' => 59,
             'birthday' => '1997/07/28'
         ]);

         DB::table('fighters')->insert([
             'name' => 'Jesse Rodríguez',
             'weight' => 52.2,
             'birthday' => '2000/01/20'
         ]);



    }
}
