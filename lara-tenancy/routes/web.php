<?php

use App\Http\Controllers\Central\CentralDomainControlellr;
use App\Http\Controllers\CentralController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// foreach (config('tenancy.central_domains') as $domain) {
//     Route::domain($domain)->group(function () {
//         // your actual routes
//     });
// }


foreach (config('tenancy.central_domains') as $domain) {
Route::domain($domain)->group(function () {

// Route::get('/', function () {
//             return view('welcome');});
Route::get('/',[CentralController::class,'index'])->name('index');
Route::post('/',[CentralController::class,'store'])->name('store');
});
}