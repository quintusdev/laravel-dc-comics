<?php
/* Importo il percorso del controller da utilizzare */

use App\Http\Controllers\ComicController;
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

/* Route che si collega alla home attraverso la classe del controller */

Route::resource('/', ComicController::class);
/* Route che si collega alla cartella comics attraverso la classe del controller */

Route::resource('comics', ComicController::class);
