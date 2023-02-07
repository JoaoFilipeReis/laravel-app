<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'index']);
Route::get('/contacts/create', [ContactController::class, 'create']);
Route::get('/contacts/{id}', [ContactController::class, 'show']);
Route::post('/contacts', [ContactController::class, 'store']);
Route::delete('/contacts/{id}', [ContactController::class, 'destroy']);
Route::get('/contacts/edit/{id}', [ContactController::class, 'edit']);
Route::put('/contacts/update/{id}', [ContactController::class, 'update']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});




