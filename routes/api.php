<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
 
use App\Models\User; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


use  App\Http\Controllers\AuthSystemController;

 

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|php artisan make:model AuthSystem --all
*/

  

Route::controller(AuthSystemController::class)->group(function(){

    Route::post('register', 'register');

    Route::post('login', 'login');

});

 
  Route::prefix('auth')->group(function () {
      
      
Route::middleware('auth:sanctum')->controller(AuthSystemController::class)->group(function(){

    Route::get('user', 'getme');
 
}) ;


}) ;




 

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
