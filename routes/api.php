<?php

use App\Http\Controllers\Api\BlogController;
use App\Http\Controllers\Api\HotelController;
use App\Http\Controllers\Api\TeaserController;
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

Route::get('/hotels/{id}', [HotelController::class, 'getHotel']);
Route::get('/hotels/{id}/teaser', [TeaserController::class, 'getHotel']);
Route::get('/blog/article/{id}', [BlogController::class, 'getArticle']);
