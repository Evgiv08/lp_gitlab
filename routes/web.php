<?php

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


// Dashboard routes.

// Login to dashboard.
Route::get('/doorway', function () {
    return view('dashboard.login');
})->name('doorway');

Route::prefix('/dashboard')->group(function () {

// All new charities(drafts) in dashboard.
    Route::get('/new', function () {
        return view('dashboard.pages.charity.new');
    })->name('new');

// All active charities in dashboard.
    Route::get('/active', function () {
        return view('dashboard.pages.charity.active');
    })->name('active');

// All completed charities in dashboard.
    Route::get('/completed', function () {
        return view('dashboard.pages.charity.completed');
    })->name('completed');

// All categories in dashboard.
    Route::get('/category', function () {
        return view('dashboard.pages.category.index');
    })->name('category');

// All appeals in dashboard.
    Route::get('/appeals', function () {
        return view('dashboard.pages.appeal.index');
    })->name('appeals');

// All banned charities in dashboard.
    Route::get('/ban', function () {
        return view('dashboard.pages.charity.ban');
    })->name('ban');

// All users in dashboard.
    Route::get('/users', function () {
        return view('dashboard.pages.user.index');
    })->name('users');

// All staff members in dashboard.
    Route::get('/staff', function () {
        return view('dashboard.pages.staff.index');
    })->name('staff');

// Show one charity in dashboard.
    Route::get('/one', function () {
        return view('dashboard.pages.charity.show');
    })->name('show');
});
