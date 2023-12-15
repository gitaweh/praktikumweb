<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dataController;


Route::get('/', [dataController::class,'show']);
Route::post('/submit-data', [dataController::class,'submitData'])->name('submit-data');

Route::get('/', function () {
    return view('dashboardData');
// rute ke show-form-pesan
});