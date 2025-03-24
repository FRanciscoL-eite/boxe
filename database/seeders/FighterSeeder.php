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
            'image'=> 'Terence.png',
            'statistics'=>'41-0-0'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Naoya Inoue',
            'weight' => 55.3,
            'birthday' => '1993/04/10',
            'country' => 'Japao',
            'image'=>'NOAYA.png',
            'statistics'=>'29-0-0'
        ]);

         DB::table('fighters')->insert([
            'name' => 'Oleksandr Usyk',
            'weight' => 100.3,
            'birthday' => '1987/01/17',
            'country' => 'Ucrania',
            'image'=>'ody.png',
            'statistics'=>'23-0-0'

         ]);

         DB::table('fighters')->insert([
             'name' => 'Saul Alvarez',
             'weight' => 76.2,
             'birthday' => '1990/07/18',
             'country' => 'Mexico',
             'image'=>'Saul.png',
            'statistics'=>'62-2-2'
         ]);

         DB::table('fighters')->insert([
            'name' => 'Artur Beterbiev',
            'weight' => 79.4,
            'birthday' => '1985/01/21',
            'country' => 'Rusia',
            'image'=>'Arutr.png',
            'statistics'=>'21-1-0'
         ]);

         DB::table('fighters')->insert([
            'name' => 'Dmitry Bivol',
            'weight' => 79.4,
            'birthday' => '1990/12/18',
            'country' => 'Quirguistao',
            'image'=>'desco.png',
            'statistics'=>'24-1-0'
         ]);

         DB::table('fighters')->insert([
            'name' => 'Devin Haney',
            'weight' => 61.2,
            'birthday' => '1998/11/17',
            'country' => 'EUA',
            'image'=>'devin.png',
            'statistics'=>'31-0-0'
         ]);

         DB::table('fighters')->insert([
             'name' => 'Gervonta Davis',
             'weight' => 61.2,
             'birthday' => '1994/11/07',
             'country' => 'EUA',
             'image'=>'craque.png',
            'statistics'=>'30-0-1'
         ]);

         DB::table('fighters')->insert([
             'name' => 'Shakur Stevenson',
             'weight' => 59,
             'birthday' => '1997/07/28',
             'country' => 'EUA',
             'image'=> 'carademau.png',
            'statistics'=>'23-0-0'
            
            
         ]);

         DB::table('fighters')->insert([
             'name' => 'Jesse Rodríguez',
             'weight' => 52.2,
             'birthday' => '2000/01/20',
             'country' => 'EUA',
             'image'=> 'bandido.png',
            'statistics'=>'21-0-0'
         ]);

         DB::table('fighters')->insert([
             'name' => 'Tyson Fury',
             'weight' => 120,
             'birthday' => '1988/08/12',
             'country' => 'Reino Unido',
             'image'=> 'uii.png',
            'statistics'=>'34-2-1'
        ]);
        
        DB::table('fighters')->insert([
            'name' => 'David Benavidez',
            'weight' => 76,
            'birthday' => '1996/12/17',
            'country' => 'Reino Unido',
             'image'=> 'aa.png',
            'statistics'=>'30-0-0'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Jaron Ennis',
            'weight' => 66.7,
            'birthday' => '1997/06/17',
            'country' => 'EUA',
             'image'=> 'aaa.png',
            'statistics'=>'33-0-0'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Marlon Tapales',
            'weight' => 55.3,
            'birthday' => '1992/03/23',
            'country' => 'Filipinas',
             'image'=> 'a.png',
            'statistics'=>'39-4-0'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Deontay Wilder',
            'weight' => 96,
            'birthday' => '1985/10/22',
            'country' => 'EUA',
             'image'=> 'd.png',
            'statistics'=>'43-4-1'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Anthony Joshua',
            'weight' => 113,
            'birthday' => '1989/10/15',
            'country' => 'Reino Unido',
             'image'=> 'feio.png',
            'statistics'=>'28-4-0'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Ryan Garcia',
            'weight' => 61.2,
            'birthday' => '1998/08/08',
            'country' => 'EUA',
             'image'=> 'rai.png',
            'statistics'=>'24-1-0'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Jake Paul',
            'weight' => 86,
            'birthday' => '1997/01/17',
            'country' => 'EUA',
            'image'=> 'merda.png',
            'statistics'=>'11-1-0'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Tommy Fury',
            'weight' => 83.9,
            'birthday' => '1999/05/07',
            'country' => 'Reino Unido',
            'image'=> 'hh.png',
            'statistics'=>'10-0-0'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Vasiliy Lomachenko',
            'weight' => 61.2,
            'birthday' => '1988/02/17',
            'country' => 'Ucrânia',
            'image'=> 'h.png',
            'statistics'=>'18-3-0'
        ]);

        DB::table('fighters')->insert([
            'name' => 'Isaac Cruz',
            'weight' => 61.2,
            'birthday' => '1998/05/23',
            'country' => 'México',
            'image'=>'fim.png',
            'statistics'=>'27-3-1'

        ]);

        DB::table('fighters')->insert([
            'name' => 'Muhammad Ali',
            'weight' => 107,
            'birthday' => '1942/1/17',
            'country' => 'USA',
            'image'=>'ali.png',
            'statistics'=>'56-5-0'

        ]);

        DB::table('fighters')->insert([
            'name' => 'Sugar Ray Robinson',
            'weight' => 70,
            'birthday' => '1921/5/03',
            'country' => 'USA',
            'image'=>'100.png',
            'statistics'=>'173-19-6'

        ]);

        DB::table('fighters')->insert([
            'name' => 'Floyd Mayweather Jr',
            'weight' => 67,
            'birthday' => '1977/2/24',
            'country' => 'USA',
            'image'=>'50.png',
            'statistics'=>'50-0-0'

        ]);

        DB::table('fighters')->insert([
            'name' => 'Mike Tyson',
            'weight' => 100,
            'birthday' => '1966/6/30',
            'country' => 'USA',
            'image'=>'MIkezao.png',
            'statistics'=>'50-7-0'

        ]);

        DB::table('fighters')->insert([
            'name' => 'George Foreman',
            'weight' => 110,
            'birthday' => '1949/1/10',
            'country' => 'USA',
            'image'=>'chines.png',
            'statistics'=>'76-5-0'

        ]);

        DB::table('fighters')->insert([
            'name' => 'Eder Jofre',
            'weight' => 55,
            'birthday' => '1936/3/26',
            'country' => 'Brasil',
            'image'=>'brasill.png',
            'statistics'=>'75-2-4'

        ]);





    }
}
