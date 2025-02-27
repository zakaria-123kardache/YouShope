<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ProduitController;
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
    return view('home');
});


 //================== §! Product !$ =======================//
//=======================================================//
Route::get('/produit',[ProduitController::class, 'produit'])->name('produit');
Route::post('/produit', [ProduitController::class, 'create'])->name('produit');
Route::delete('/produit/{id}', [ProduitController::class, 'delete'])->name('produit.delete');
Route::post('/produit/update/{id}', [ProduitController::class, 'update'])->name('produit.update');


 //================== §! categorie !$ ====================//
//=======================================================//

Route::get('categorie',[CategorieController::class, 'categorie'])->name('categorie');
Route::post('/categorie', [CategorieController::class, 'create'])->name('categorie');
Route::delete('/categorie/{id}', [CategorieController::class, 'delete'])->name('categorie.delete');
Route::post('/categorie/update/{id}', [CategorieController::class, 'update'])->name('categorie.update');