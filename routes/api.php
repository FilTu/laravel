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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('publishers/list', 'PublishersController@list');
Route::get('magazines/{id}', 'MagazineController@show');
Route::get('magazines/search/{key}', 'MagazineController@filter');
