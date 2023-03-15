<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::post("/register",[ApiController::class,'register']);
Route::post("/login",[ApiController::class,'login']);


Route::group(['middleware'=>['auth:sanctum']],function(){

    Route::apiResource('/products', ProductController::class);
 
    Route::apiResource("/user",ApiController::class);
     Route::get("/user-profile",[ApiController::class,'getUser']);

    Route::post("/logout",[ApiController::class,'logout']);
    Route::post("/check-admin",[ApiController::class,'checkAdmin']);
});


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

