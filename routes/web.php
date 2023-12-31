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
    return redirect(app()->getLocale());
});
Route::prefix('{locale}')->group(function () {
    Auth::routes();
});

//Route::prefix('{locale}')->group(function () {
//    Route::get('admin/dashboard', 'AdminDashboardIndexController@index');
//});

//Route::prefix('{locale}')->get('any', function () {
//    return view('app');
//})->where('any', '.*');

// Users Route Group
app(\App\Services\Routes\Providers\User\UserRoutesProvider::class)->registerRoutes();
// Admin Routes
app(\App\Services\Routes\Providers\Admin\AdminRoutesProvider::class)->registerRoutes();
