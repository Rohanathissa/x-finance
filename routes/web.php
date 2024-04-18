<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SalaryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/user', function () {
//     return view('user/index', 'user'->$users);
// })->middleware(['auth', 'verified'])->name('user');

Route::get('/user', function () {
    $users = User::all(); // Fetch all users from the database
    return view('user.index', ['users' => $users]); // Pass the users variable to the view
})->middleware(['auth', 'verified'])->name('user');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/user', [UserController::class]);
});



//Route::get('/salary', 'SalaryController@index')->name('salary');

Route::get('salary', [SalaryController::class, 'index'])
    ->name('salary');

// Route::resource('user', UserController::class);
require __DIR__.'/auth.php';
