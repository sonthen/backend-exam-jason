<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Http\request;

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
    return view('welcome');
});

Route::group(['prefix'=>'unit'], function(){

    Route::get('/', function () {
        $UnitList = DB::table('unit')->get();

    });



    Route::post('create','ProductController@CreateUnit');
    Route::post('delete','categoryController@removeCategory');

});
