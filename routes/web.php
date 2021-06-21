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

Route::get('/', function () {
  // creo la variabile $comics che sarà un array che passerò alla rotta e la associo
  // ad un file config tramite @config
  $elements = config("comics");
  // var_dump($elements);
  // all' interno di questa variabile avrò il return del file, cioè un array
  // ora passo l' array associativo come secondo argomento della view
    return view('homePage', ["datiView" => $elements]);
});

Route::get('/comics/{id}', function($id) {

  $elements = config("comics");
  // prendo l' indice dei dati che sceglierà l' utente e lo salvo in una variabile
  // e la passo al return
  // controllo che l' id sia possibile

  if(!is_numeric($id) || $id < 0 || $id > count($elements) -1){
    abort(404, 'Prodotto Inesistente');
  }

  $comic_choose = $elements[$id];

  return view('comics.comic', [
    "fumetto" => $comic_choose,
  ]);
  // return'ciao';
})->name('fumetti');
