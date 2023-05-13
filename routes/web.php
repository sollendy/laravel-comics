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
$shopPics = [
    
];
// Route::get('/', function () use ($headLinks){
//     return view('home', compact('headLinks'));
// });
//quello di sopra è obsoleto perché per mandare tutto a home posso fare tutto in una route e due route uguali a home daranno errore 

Route::get('/', function () use($headLinks) {

    $fumetti = config("comics");
    return view('home', compact("fumetti", "headLinks"));
});