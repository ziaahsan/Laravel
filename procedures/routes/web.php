<?php

use Illuminate\Support\Facades\Route;


// Custom Controllers
use App\Http\Controllers\ProcedureController;

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

// Website :Root
Route::get('/', [ProcedureController::class, 'index']);
Route::get('/create', [ProcedureController::class, 'create']);
Route::post('/create', [ProcedureController::class, 'save']);

Route::get('/view/{id}', function () {
    $params = ['title' => 'Procedures | View'];
    return view('procedure.view', $params);
});

// Welcome page migrating to :larvel
Route::get('/laravel', function () {
    return view('laravel-home');
});
