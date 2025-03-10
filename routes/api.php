
<?php

use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::controller(RegisterController::class)->group(function(){
    Route::post('register', 'register'); //url :http://127.0.0.1:8002/api/register
    Route::post('login', 'login');
});

Route::middleware('auth:sanctum')->group( function () {
    Route::resource('products', ProductController::class);
});
