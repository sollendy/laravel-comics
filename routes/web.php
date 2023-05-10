<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

$headLinks = [
    'personaggi',
    'fumetti',
    'film',
    'tv',
    'giochi',
    'collezionabbili',
    'video',
    'fan',
    'notizie',
    'negozio',
];
Route::get('/', function () use ($headLinks){
    return view('home', compact('headLinks'));
});
Route::get('/ah', function (){
    $fumetti = config("comics");
    return view('home', compact("fumetti"));
});
