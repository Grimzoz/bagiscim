<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DonateController;
use App\Http\Controllers\DonateCreateController;
use App\Http\Controllers\MainController;

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
Route::get('/anasayfa', function(){
    return view('dashboard');
})->name('dashboard')->middleware('auth');


Route::get('/', function () {
    return view('welcome');

});

/*Route::middleware(['auth:sanctum', 'verified'])->get('/anasayfa', function () {
    return view('dashboard');

})->name('dashboard');
*/
Route::group(['middleware' => 'auth'],function(){
    Route::get('anasayfa',[MainController::class,'dashboard'])->name('dashboard');
    Route::get('donate',[MainController::class,'donate_detail'])->name('donate.detail');
});

Route::group(['middleware',['auth','isAdmin'],'prefix'=>'admin'],function ()
{
    ///DELETE METODUNU GET İLE GÖNDERİYORUZ//////////
    Route::get('donates/{id}',[DonateController::class,'destroy'])->whereNumber('id')->name('donates.destroy');
    /////////////////////////
    Route::resource('donates',App\Http\Controllers\Admin\DonateController::class);
   //Route::resource('edit/{id}',App\Http\Controllers\Admin\DonateController::class);
    Route::resource('bagis',App\Http\Controllers\DonateCreateController::class);



});

Route::group(['middleware',['auth']],function ()
{
    Route::resource('bagis',App\Http\Controllers\DonateCreateController::class);
});

