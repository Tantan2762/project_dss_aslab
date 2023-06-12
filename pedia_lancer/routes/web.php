<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SliderController;

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
    return view('welcome');
});

Route::get('/main', [MainController::class, 'index']);
Route::get('/coba', function () {
    return view('coba');
});

Route::group(['middleware'=>['auth', 'ceklevel:admin']], function(){

    Route::get('/product_manager', [ProductController::class, 'index2']);
    Route::get('/product_manager-edit/{id}', [ProductController::class, 'edit2']);
    Route::put('/product_manager-update', [ProductController::class, 'update2']);

    Route::get('/slider_manager', [SliderController::class, 'index2']);
    Route::get('/slider_manager-edit/{id}', [SliderController::class, 'edit']);
    Route::put('/slider_manager-update', [SliderController::class, 'update']);

    

});

Route::group(['middleware'=>['auth', 'ceklevel:admin,staff']], function(){

    Route::get('/product', [ProductController::class, 'index']);
    Route::get('/product-create', [ProductController::class, 'create']);
    Route::post('/product-store', [ProductController::class, 'store']);

    Route::get('/product-edit/{id}', [ProductController::class, 'edit']);
    Route::put('/product-update', [ProductController::class, 'update']);
    Route::get('/product-delete/{id}', [ProductController::class, 'delete']);

    Route::get('/slider', [SliderController::class, 'index']);
    Route::get('/slider-create', [SliderController::class, 'create']);
    Route::post('/slider-store', [SliderController::class, 'store']);
    Route::get('/slider-delete/{id}', [SliderController::class, 'delete']);


});





Route::get('/catalog', [ProductController::class, 'index3']); 
Route::get('/catalog-search', [ProductController::class, 'search']); 

Route::get('/home', [ProductController::class, 'index4']);
Route::get('/home', [ProductController::class, 'index5']);
Route::get('/about', function () {
    return view('page.about');
});



Route::get('/login', function () {
    return view('Pengguna.login');
})->name('login');
Route::post('/postlogin', 'App\Http\Controllers\LoginController@postlogin')->name('postlogin');
Route::get('/logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

