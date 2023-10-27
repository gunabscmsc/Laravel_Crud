<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
//main index
Route::get("/",[ProductController::class,'index']);
//screate
Route::get("products/create",[ProductController::class,'create']);
//store
Route::post("products/store",[ProductController::class,'store']);

// show
Route::get("products/{id}/show",[ProductController::class,'show']);

//edit
Route::get("products/{id}/edit",[ProductController::class,'edit']);

//update
Route::put("products/{id}/update",[ProductController::class,'update']);

//delete 
Route::get("products/{id}/delete",[ProductController::class,'destroy']);