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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [\App\Http\Controllers\Home::class, "index"])->name("index");

Route::prefix("admin")->group(function (){
    Route::get("login", [\App\Http\Controllers\Auth\LoginController::class, "showAdminLoginForm"])->name("admin-login");
    Route::post("login", [\App\Http\Controllers\Auth\LoginController::class, "submitAdminLoginForm"]);
    Route::get('/', function () {
        return view('welcome');
    })->name("admin-home");
});

Route::prefix("vendor")->group(function (){
    Route::get("login", [\App\Http\Controllers\Auth\LoginController::class, "showVendorLoginForm"])->name('vendor-login');
    Route::post("login", [\App\Http\Controllers\Auth\LoginController::class, "submitVendorLoginForm"]);

    Route::get("register", [\App\Http\Controllers\Auth\RegisterController::class, "showVendorRegisterForm"])->name("vendor-register");
    Route::post("register", [\App\Http\Controllers\Auth\RegisterController::class, "submitVendorRegisterForm"])->name("submit-vendor-register");

    /**
     * route to view vendor profile with
     */
    Route::get("/{name}/home", [\App\Http\Controllers\Home::class, "showVendorUrl"])->name("vendor");
    Route::get("/{name}/home", [\App\Http\Controllers\Home::class, "showVendorUrl"])->name("vendor");

    /**
     * vendor dashboard shows here
     */
    Route::get("/dashboard", [\App\Http\Controllers\Dashboard::class, "index"])->name("vendor-dashboard")->middleware("auth:vendor");

    /**
     * Add space route is here
     */
    Route::get("add-space", [\App\Http\Controllers\Vendor::class, "showAddSpaceForm"])->name('add-space');
    Route::post("add-space", [\App\Http\Controllers\Vendor::class, "submitAddSpaceForm"]);
});

/**
 * Profile route
 */
Route::get("profile", [\App\Http\Controllers\Dashboard::class, "profile"])->name("profile");
Route::post("profile", [\App\Http\Controllers\Dashboard::class, "profileEdit"]);
Route::get("change-password", [\App\Http\Controllers\Dashboard::class, "showChangePassword"])->name("change-password");
Route::post("change-password", [\App\Http\Controllers\Dashboard::class, "submitChangePassword"])->name("change-password");

/**
 * view space route
 */
Route::get("space/{id}", [\App\Http\Controllers\Home::class, "showSpecificProperty"])->name("show-space");

Route::get("logout", [\App\Http\Controllers\Auth\LoginController::class, "logout"])->name("logout");

Route::get("login", [\App\Http\Controllers\Auth\LoginController::class, "showUserLoginForm"])->name("login");
Route::post("login", [\App\Http\Controllers\Auth\LoginController::class, "submitUserLoginForm"]);

Route::get("register", [\App\Http\Controllers\Auth\RegisterController::class, "showUserRegisterForm"])->name("register");
Route::post("register", [\App\Http\Controllers\Auth\RegisterController::class, "submitVendorRegisterForm"])->name("submit-register");


Route::get('dashboard', [\App\Http\Controllers\Dashboard::class, "index"])->name("dashboard")->middleware("auth");

