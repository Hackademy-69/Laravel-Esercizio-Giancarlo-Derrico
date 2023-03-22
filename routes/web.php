<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $Players = [
        ['name'=>'Shaq ONeal'],
        ['name'=>'Michael Jordan'],
        ['name'=>'Kobe briant'],
        ['name'=>'Ronaldo'],
        ['name'=>'Messi'],
        ['name'=>'Totti Er pupone'],
        ['name'=>'Del piero'],
        ['name'=>'Buffon'],
        ['name'=>'Cassano'],
        ['name'=>'Bobo Vieri'],
    ];

    return view('welcome',['Players'=> $Players]);

});
Route::get('/sport', function () {

    $trainer = 'Giancarlo';
    
        return view('sport',['trainer' => $trainer]);
    
    });
    