<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoxerController extends Controller
{
    public function show()
    {
        $fighter = [
            'name' => 'Terence Crawford',
            'record' => '41-0-0',
            'ko' => '31 KOs',
            'division' => 'Super Welter',
            'rating' => 5,
            'bouts' => 41,
            'rounds' => 245,
            'ko_percentage' => '75.61%',
            'career' => '2008-2024',
            'debut' => '2008-03-14',
            'titles' => 'WBO Interim World Super Welter',
            'id' => 447121,
            'birth_name' => 'Terence Allan Crawford',
            'sex' => 'Male',
            'alias' => 'Bud',
            'age' => 37,
            'nationality' => 'USA',
            'stance' => 'Southpaw',
            'height' => "5'8\" / 173 cm",
            'reach' => "74\" / 188 cm",
            'residence' => 'Omaha, Nebraska, USA',
            'birth_place' => 'Omaha, Nebraska, USA',
            'image' => asset('images/fighter$fighter.jpg') // Substitua pelo caminho correto da imagem
        ];

        return view('fighter$fighter.show', compact('fighter$fighter'));
    }
}