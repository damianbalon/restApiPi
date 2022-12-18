<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('balon/people', [PeopleControler::class, 'index']);
Route::get('balon/people/{people}', [PeopleControler::class, 'show']);
Route::post('balon/people', [PeopleControler::class, 'store']);
Route::put('balon/people/{people}', [PeopleControler::class, 'update']);
Route::delete('balon/people/{people}', [PeopleControler::class, 'delete']);
