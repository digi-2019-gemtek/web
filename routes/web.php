<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\Dashboard;

Route::get('/', ['middleware' => 'auth', function() {
    return Redirect::to('/dashboard'); 
}]);

    
Route::group(['as' => 'auth.'], function () {
    // These routes require the user to be logged in
    Route::group(['middleware' => 'auth'], function () {
        Route::get('/dashboard', [Dashboard::class, 'show'])->name('dashboard');
        Route::get('/logout', 'LoginController@logout')->name('logout');
    });
    
    // These routes require no user to be logged in
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/login', [LoginController::class, 'show'])->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('login.post');
    });
});
        

        
        