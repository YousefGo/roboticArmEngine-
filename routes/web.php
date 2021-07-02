<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EngineController;

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

// Route::get('/', function () {
//     return view('engin.index');
// });
Route::get('/arm/ar',[EngineController::class,'showArabic'])->name('engine.showarabic');
Route::get('/arm/{lang}',[EngineController::class,'showEngine'])->name('engine.index');
Route::get('/baseControl',function(){
    return view('engin.base');
});
Route::post('/storeengine',[EngineController::class,'update'])->name('store.engine');

