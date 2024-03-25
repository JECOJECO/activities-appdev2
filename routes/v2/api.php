<?php

use App\Http\Controllers\UserController;
use GrahamCampbell\ResultType\Success;
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

Route::get('/users', [UserController::class,'index']);

Route::post('/register', [UserController::class,'store']);

Route::put('/update/{id}', function(){
    return 'update from v2';
});
Route::patch('/updatev2/{id}', function(){
    return 'update v2 form v2';
});
Route::delete('/delete/{id}', function(){
    return 'deleted from v2';
});