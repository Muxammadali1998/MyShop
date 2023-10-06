<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Site\SiteController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SiteController::class, 'index']);

Route::get('/admin',[ProductController::class, 'index'])->middleware('auth');



Route::middleware('auth')->group(function(){
    Route::get('/tovarlar',[ProductController::class, 'index'])->name('products');
    Route::get('/addProduct',[ProductController::class, 'create']);
    Route::post('/productCreate',[ProductController::class, 'store']);
    Route::get('/product/{id}',[ProductController::class, 'destroy']);
    Route::get('/editProduct/{id}',[ProductController::class, 'edit']);
    Route::post('/productUpdate/{id}',[ProductController::class, 'update']);

    Route::resource('/category',CategoryController::class);

    // Route::get('/category',[CategoryController::class, 'index'])->name('category.index');
    // Route::get('/category/create',[CategoryController::class, 'create'])->name('category.create');
    // Route::post('/category',[CategoryController::class, 'store'])->name('category.store');
    // Route::get('/category/{id}',[CategoryController::class, 'show'])->name('category.show');
    // Route::get('/category/edit/{id}',[CategoryController::class, 'edit'])->name('category.edit');
    // Route::put('/category/{id}',[CategoryController::class, 'update'])->name('category.update');
    // Route::delete('/cagegory/{id}',[CategoryController::class, 'destroy'])->name('category.destroy');
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::middleware('name')->group(function(){

        Route::get('/stie/Product',[SiteController::class, 'index']);
        Route::post('/stie/Product',[SiteController::class, 'store']);
    });
});

Route::get('/lang/{key}',function($key){

    if (!in_array($key, ['en', 'ru', 'uz'])) {
       return back();
    }
    session()->put('lang',$key);

    return back();
});

// Route::group('/admin',function(){
//     Route::post('/Product',[SiteController::class, 'create']);
//     Route::get('/Product',[SiteController::class, 'show']);
// });






require __DIR__.'/auth.php';


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
