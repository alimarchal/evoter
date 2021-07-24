<?php

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $constituency_name = \App\Models\VoterList::select('constituency_name')->groupBy('constituency_name')->get();
    return view('AdminLTE.dashboard', compact('constituency_name'));
})->name('dashboard');

Route::middleware(['auth:sanctum'])->get('voterList/reportAreaWise', [\App\Http\Controllers\VoterListController::class, 'reportAreaWise'])->name('voterList.reportAreaWise');
Route::middleware(['auth:sanctum'])->resource('voterList', \App\Http\Controllers\VoterListController::class);
Route::middleware(['auth:sanctum'])->resource('electionDashboard', \App\Http\Controllers\ElectionDashboardController::class);
