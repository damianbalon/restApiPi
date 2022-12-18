<?php

use App\Http\Controllers\api\PeopleController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



Route::get('/balon/305343/people', [PeopleController::class, 'index']);
Route::get('/balon/305343/people/{people}', [PeopleController::class, 'show']);
Route::post('/balon/305343/people', [PeopleController::class, 'store']);
Route::put('/balon/305343/people/{people}', [PeopleController::class, 'update']);
Route::delete('/balon/305343/people/{people}', [PeopleController::class, 'delete']);
