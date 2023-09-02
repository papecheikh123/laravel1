<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController;

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


Route::get('/produit',[ProduitController::class,'list_produit']);
Route::get('/ajouter',[ProduitController::class,'ajouter_produit']);
Route::post('/ajouter/traitement',[ProduitController::class,'ajouter_produit_traitement']);
Route::post('/update/traitement',[ProduitController::class,'update_produit_traitement']);

Route::get('/update_produit/{id}',[ProduitController::class,'update_produit']);

