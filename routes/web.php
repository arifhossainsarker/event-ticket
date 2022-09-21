<?php

use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

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

Route::group(['as' => 'fatima.', 'prefix' => 'fatima',], function () {
    Route::resource('/registration', CustomerController::class);
    Route::get('/registration/payment/{session_id}', [CustomerController::class, 'registration_payment'])->name('payment');
    Route::get('/order/update/', [CustomerController::class, 'order_update'])->name('order.update');
    Route::post('/order/ticket/', [CustomerController::class, 'order_ticket'])->name('order.ticket');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
