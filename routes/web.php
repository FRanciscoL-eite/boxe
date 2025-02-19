<?php

use App\Models\Category;
use App\Models\Fight;
use App\Models\Fighter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lutadores', function () {
    $fighters = Fighter::all();
    return view('lutadores.index', compact('fighters'));
})->name('lutadores.index');

Route::get('/lutadores/{id}', function ($id) {
    $fighter = Fighter::find( $id );
    return view('lutadores.show', compact('fighter'));
})->name('lutadores.show');

Route::get('/lutas', function () {
    $fights = Fight::all();
    return view('fights.index', compact('fights'));
})->name('fights.index');

Route::get('/lutadores/create', function () {
    return view('lutadores.create');
})->name('lutadores.create');

Route::post('/lutadores/store', function (Request $request) {

    $validated = $request->validate([
        'name' => 'min:3',        
        'birthday' => 'date',        
        'weight' => 'numeric',
        'statistic' => 'float',        
        'country' => 'text'
    ]);

    Fighter::create([
        'name' => $request->input('name'),
        'birthday' => $request->input('birthday'),
        'weight' => $request->input('weight'),
        'statistic' => $request->input('statistc'),
        'country' => $request->input('country'),
    ]);
    
    return redirect()->route('lutadores.create');
});


Route::get('/categories', function () {
    $categories = Category::all();    
    return view('categories.index', compact('categories'));
});

Route::get('/categories/create', function () {
    return view('categories.create');
})->name('categories.create');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::post('/categories/store', function (Request $request) {

    $validated = $request->validate([
        'name' => 'required|min:3|unique:categories',        
        'slug' => 'required|unique:categories,slug',        
    ]);

    Category::create([
        'name' => $request->input('name'),
        'slug' => $request->input('slug'),
    ]);
    
    return redirect()->route('categories.create');
});