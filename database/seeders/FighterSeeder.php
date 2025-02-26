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
            'id' => 1,
            'name' => 'Terence Crawford',
            'weight' => 66.7,
            'birthday' => '1987/09/29',
            'country' => 'EUA',
            'image'=> 'Terence.png'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Naoya Inoue',
            'weight' => 55.3,
            'birthday' => '1993/04/10',
            'country' => 'Japao',
            'image'=>'NOAYA.png'
        ]);

         DB::table('fighters')->insert([
            'name' => 'Oleksandr Usyk',
            'weight' => 100.3,
            'birthday' => '1987/01/17',
            'country' => 'Ucrania',
            'image'=>'ody.png'

         ]);

         DB::table('fighters')->insert([
             'name' => 'Saul Alvarez',
             'weight' => 76.2,
             'birthday' => '1990/07/18',
             'country' => 'Mexico',
             'image'=>'Saul.png'
         ]);

         DB::table('fighters')->insert([
            'name' => 'Artur Beterbiev',
            'weight' => 79.4,
            'birthday' => '1985/01/21',
            'country' => 'Rusia',
            'image'=>'Arutr.png'
         ]);

         DB::table('fighters')->insert([
            'name' => 'Dmitry Bivol',
            'weight' => 79.4,
            'birthday' => '1990/12/18',
            'country' => 'Quirguistao',
            'image'=>'desco.png'
         ]);

         DB::table('fighters')->insert([
            'name' => 'Devin Haney',
            'weight' => 61.2,
            'birthday' => '1998/11/17',
            'country' => 'EUA',
            'image'=>'devin.png'
         ]);

         DB::table('fighters')->insert([
             'name' => 'Gervonta Davis',
             'weight' => 61.2,
             'birthday' => '1994/11/07',
             'country' => 'EUA',
             'image'=>'craque.png'
         ]);

         DB::table('fighters')->insert([
             'name' => 'Shakur Stevenson',
             'weight' => 59,
             'birthday' => '1997/07/28',
             'country' => 'EUA',
             'image'=> 'carademau.png'
            
            
         ]);

         DB::table('fighters')->insert([
             'name' => 'Jesse Rodríguez',
             'weight' => 52.2,
             'birthday' => '2000/01/20',
             'country' => 'EUA',
             'image'=> 'bandido.png'
         ]);

         DB::table('fighters')->insert([
             'name' => 'Tyson Fury',
             'weight' => 120,
             'birthday' => '1988/08/12',
             'country' => 'Reino Unido',
             'image'=> 'uii.png'
        ]);
        
        DB::table('fighters')->insert([
            'name' => 'David Benavidez',
            'weight' => 76,
            'birthday' => '1996/12/17',
            'country' => 'Reino Unido',
             'image'=> 'aa.png'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Jaron Ennis',
            'weight' => 66.7,
            'birthday' => '1997/06/17',
            'country' => 'EUA',
             'image'=> 'aaa.png'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Marlon Tapales',
            'weight' => 55.3,
            'birthday' => '1992/03/23',
            'country' => 'Filipinas',
             'image'=> 'a.png'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Deontay Wilder',
            'weight' => 96,
            'birthday' => '1985/10/22',
            'country' => 'EUA',
             'image'=> 'd.png'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Anthony Joshua',
            'weight' => 113,
            'birthday' => '1989/10/15',
            'country' => 'Reino Unido',
             'image'=> 'feio.png'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Ryan Garcia',
            'weight' => 61.2,
            'birthday' => '1998/08/08',
            'country' => 'EUA',
             'image'=> 'rai.png'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Jake Paul',
            'weight' => 86,
            'birthday' => '1997/01/17',
            'country' => 'EUA',
            'image'=> 'merda.png'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Tommy Fury',
            'weight' => 83.9,
            'birthday' => '1999/05/07',
            'country' => 'Reino Unido',
            'image'=> 'hh.png'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Vasiliy Lomachenko',
            'weight' => 61.2,
            'birthday' => '1988/02/17',
            'country' => 'Ucrânia',
            'image'=> 'h.png'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Isaac Cruz',
            'weight' => 61.2,
            'birthday' => '1998/05/23',
            'country' => 'México',
            'image'=>'fim.png'

        ]);



    }
}
