<?php

use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;


Route::get('/', function () {
    return view('home');
})->name("home");
Route::get('login', [LoginController::class, "index"])->name("login");
Route::post('login/check', [LoginController::class, "check"])->name("login.check");

Route::resource("user", UserController::class);
Route::get("logout", function () {
    session()->forget(["client_id", "client_login"]);
    return redirect(route("home"));
});
// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
