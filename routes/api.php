<?php

use Illuminate\Http\Request;
use App\Magazine;
use App\Publishers;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Autoryzacja name=admin, password=admin

Route::post('authorize', 'AuthController@login');

//Metody autozryzowane tokenem JWT

Route::group(['middleware' => 'jwt.auth'], function () {
  Route::get('publishers/list', 'PublishersController@list');
  Route::get('magazines/{id}', 'MagazineController@show');
  Route::get('magazines/search/{key}', 'MagazineController@filter');
  Route::get('magazines/search/{key}/{page}', 'MagazineController@pagination');
});
