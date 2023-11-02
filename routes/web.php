<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MortgageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("mortgage")->group(function ($router) {
    $router->get('/', [MortgageController::class, 'index']);
    $router->get('/calculator', [MortgageController::class, 'create']);
    $router->post('/loan', [MortgageController::class, 'store'])->name('mortgage.store');
});
