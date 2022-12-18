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

Route::get('/balon/305343/people', [PeopleControler::class, 'index']);
Route::get('/balon/305343/people/{people}', [PeopleControler::class, 'show']);
Route::post('/balon/305343/people', [PeopleControler::class, 'store']);
Route::put('/balon/305343/people/{people}', [PeopleControler::class, 'update']);
Route::delete('/balon/305343/people/{people}', [PeopleControler::class, 'delete']);
