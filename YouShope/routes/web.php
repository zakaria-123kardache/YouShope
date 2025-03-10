<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProduitController;
use App\Http\Controllers\ProduitDetaiController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});
Route::get('shop', function () {
    return view('shop');
});
Route::get('about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('panier', function () {
    return view('panier');
});
Route::get('checkout', function () {
    return view('checkout');
});

Route::get('/', [HomeController::class, 'home']);
Route::get('/shop', [ShopController::class, 'shop']);
Route::get('/produitdetai/{id}', [ProduitController::class, 'show']);



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


//================== §! checkout !$ ====================//
//=======================================================//
Route::post('/checkout', [CommandeController::class, 'checkout'])->name('checkout');
//================== §! commande !$ ====================//
//=======================================================//
Route::get('/commande',[CommandeController::class, 'commande'])->name('commande');
Route::post('/commande/update/{id}', [CommandeController::class, 'update'])->name('commande.update');